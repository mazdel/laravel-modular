<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ModuleMakeRequest extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:make:request
        {module : Module Name}
        {requestName : Request Name}
        {--api}
        ';

    /**
     * Prompt for missing input arguments using the returned questions.
     *
     * @return array<string, string>
     */
    protected function promptForMissingArgumentsUsing(): array
    {
        return [
            'module' => 'What is the Module name you want to create its Request?',
            'requestName' => 'What is the Request name you want to create?',
        ];
    }

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a Module Request';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $module = $this->argument('module');
        $requestName = $this->argument('requestName');
        $this->info("Creating Request $module/Requests/$requestName....");
        $this->newLine();

        if (!File::isDirectory(base_path("app/Modules/$module"))) {
            $this->error("ERROR : Module $module doesn't exist");
            $this->newLine();
            return;
        }

        $baseDir = base_path("app/Modules/$module/Requests");
        if (File::isFile("$baseDir/$requestName.php")) {
            $this->error("ERROR : Request $module/Requests/$requestName is already exist");
            $this->newLine();
            return;
        }
        File::ensureDirectoryExists($baseDir);

        $stubPath = "Console/Stubs/request.stub";
        if ($this->option('api')) {
            $stubPath = "Console/Stubs/api.request.stub";
        }
        $stubContent = File::get(app_path($stubPath));
        $content = str_replace("{{ module }}", $module, $stubContent);
        $content = str_replace("{{ requestName }}", $requestName, $content);

        File::put("$baseDir/$requestName.php", $content);
        $this->info("Request $module/Requests/$requestName is created");

        $this->newLine();
    }
}
