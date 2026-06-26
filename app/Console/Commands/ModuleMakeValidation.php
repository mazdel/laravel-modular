<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\File;

class ModuleMakeValidation extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:make:validation
        {module : Module Name}
        {validationName : Validation Name}
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
            'module' => "What is the Module name you want to create it's Validation?",
            'validationName' => 'What is the Validation name you want to create?',
        ];
    }

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a Module Validation';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $module = $this->argument('module');
        $validationName = $this->argument('validationName');
        $this->info("Creating Validation $module/Validations/$validationName....");
        $this->newLine();

        if (!File::isDirectory(base_path("app/Modules/$module"))) {
            $this->error("ERROR : Module $module doesn't exist");
            $this->newLine();
            return;
        }

        $baseDir = base_path("app/Modules/$module/Validations");
        if (File::isFile("$baseDir/$validationName.php")) {
            $this->error("ERROR : Validation $module/Validations/$validationName is already exist");
            $this->newLine();
            return;
        }
        File::ensureDirectoryExists($baseDir);

        $stubPath = "Console/Stubs/validation.stub";
        if ($this->option('api')) {
            $stubPath = "Console/Stubs/api.validation.stub";
        }
        $stubContent = File::get(app_path($stubPath));
        $content = str_replace("{{ module }}", $module, $stubContent);
        $content = str_replace("{{ validationName }}", $validationName, $content);

        File::put("$baseDir/$validationName.php", $content);
        $this->info("Validation $module/Validations/$validationName is created");

        $this->newLine();
    }
}
