<?php

namespace Mazdel\LaravelModular\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Mazdel\LaravelModular\Concerns\InteractsWithModules;
use ZipArchive;

class ModuleTemplateGet extends Command implements PromptsForMissingInput
{
    use InteractsWithModules;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:template:get
        {templateName : Template Name}
        ';

    /**
     * Prompt for missing input arguments using the returned questions.
     *
     * @return array<string, string>
     */
    protected function promptForMissingArgumentsUsing(): array
    {
        return [
            'templateName' => 'What is the template name you want to get?',
        ];
    }

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get a view template for the Module';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $templateName = $this->argument('templateName');
        $remoteUrl = "https://minio.armserv.my.id";
        $remoteDir = "{$remoteUrl}/templates";
        $fileName = "{$templateName}.zip";
        $remoteFile = "{$remoteDir}/{$fileName}";
        try {
            set_time_limit(0);
            $headResponse = Http::head($remoteFile);
            if (!$headResponse->successful()) {
                $this->error("Template not found");
                $this->newLine();
                return Command::FAILURE;
            }
            $totalBytes = (int) $headResponse->header('Content-Length');
            if ($totalBytes === 0) {
                $this->warn("Could not determine file size. Progress bar max steps will be unknown.");
            }

            $targetPath = storage_path('app/template');
            File::ensureDirectoryExists($targetPath);

            $this->info("Starting memory-safe download...");

            $progressBar = $this->output->createProgressBar($totalBytes);
            $progressBar->setFormat(' %current%/%max% bytes [%bar%] %percent:3s%% %elapsed:6s%/%estimated:-6s%');
            $progressBar->start();

            Http::withOptions([
                'sink' => "{$targetPath}/{$fileName}",
                'progress' => function ($downloadTotal, $downloadedBytes, $uploadTotal, $uploadedBytes) use ($progressBar) {
                    if ($downloadedBytes > 0) {
                        $progressBar->setProgress($downloadedBytes);
                    }
                },
            ])->get($remoteFile);

            $progressBar->finish();
            $this->newLine();
            $this->info("Download complete! Saved to: " . "{$targetPath}/{$fileName}");
            $this->newLine();
            $this->info("Extracting the template...");

            $zip = new ZipArchive;
            if ($zip->open("{$targetPath}/{$fileName}")) {
                $extractToPath = "{$targetPath}";
                File::ensureDirectoryExists($extractToPath);
                $totalFiles = $zip->numFiles;

                // Create an extraction progress bar
                $extractProgress = $this->output->createProgressBar($totalFiles);
                $extractProgress->start();

                for ($i = 0; $i < $totalFiles; $i++) {
                    // Extract files one by one (Memory safe)
                    $zip->extractTo($extractToPath, $zip->getNameIndex($i));
                    $extractProgress->advance();
                }

                $extractProgress->finish();
                $zip->close();
                $this->newLine();
                $this->info("Extraction completed successfully!");

                if (File::delete("{$targetPath}/{$fileName}")) {
                    $this->info("Original ZIP file deleted to free up space.");
                }
                $this->newLine();

                $this->info("Copying files to their respective dirs...");
                if (File::isDirectory("{$targetPath}/{$templateName}/public")) {
                    File::copyDirectory("{$targetPath}/{$templateName}/public", public_path());
                    $this->info("public dir is copied");
                }
                if (File::isDirectory("{$targetPath}/{$templateName}/views")) {
                    File::copyDirectory("{$targetPath}/{$templateName}/views", resource_path('views'));
                    $this->info("views dir is copied");
                }
                if (File::isDirectory("{$targetPath}/{$templateName}/Models")) {
                    File::copyDirectory("{$targetPath}/{$templateName}/Models", app_path('Models'));
                    $this->info("Models dir is copied");
                }
                if (File::isDirectory("{$targetPath}/{$templateName}/database")) {
                    File::copyDirectory("{$targetPath}/{$templateName}/database", app_path('../database'));
                    $this->info("database dir is copied");
                }
                $stubDirs = resource_path('views/stubs/');
                File::ensureDirectoryExists($stubDirs);
                $stubFiles = glob(resource_path('views') . "/*.stub");
                if (!empty($stubFiles)) {
                    foreach ($stubFiles as $stubPath) {
                        $this->info($stubPath);
                        $stubName = basename($stubPath);
                        $this->info($stubName);

                        File::move($stubPath, "{$stubDirs}/{$stubName}");
                        $this->info("- {$stubName} moved");
                    }
                }

                $this->info('Running menu table migration and it`s seed...');
                $this->call('migrate', [
                    '--path' => 'database/migrations/2026_06_28_103024_create_menu_table.php',
                ]);
                $this->call('db:seed', [
                    '--class' => 'MenuSeeder',
                ]);

                $this->info("Removing {$targetPath}/{$templateName}");
                File::deleteDirectory("{$targetPath}/{$templateName}");
            } else {
                $this->error("Failed to open or corrupt ZIP file.");
                return Command::FAILURE;
            }
            return Command::SUCCESS;
        } catch (\Exception $th) {
            Log::error($th);
            $this->error("An error occured while downloading the template");
            $this->error($th->getMessage());
            $this->newLine();
            return Command::FAILURE;
        }
    }
}
