<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use ZipArchive;

class ModuleGetTemplate extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:get:template
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
                $stubDirs = app_path('Console/Stubs');
                $stubFiles = glob(resource_path('views') . "/*.stub");
                if (!empty($stubFiles)) {
                    foreach ($stubFiles as $stubPath) {
                        $stubName = basename($stubPath);
                        File::move($stubPath, "{$stubDirs}/{$stubName}");
                        $this->info("- {$stubName} moved");
                    }
                }
            } else {
                $this->error("Failed to open or corrupt ZIP file.");
                return Command::FAILURE;
            }
            return Command::SUCCESS;
        } catch (\Exception $th) {
            $this->error("An error occured while downloading the template");
            $this->error($th->getMessage());
            $this->newLine();
            return Command::FAILURE;
        }
    }
}
