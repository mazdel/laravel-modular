<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ModuleMakeModel extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:make:model
        {module : Module Name}
        {modelName : Model Name}';

    /**
     * Prompt for missing input arguments using the returned questions.
     *
     * @return array<string, string>
     */
    protected function promptForMissingArgumentsUsing(): array
    {
        return [
            'module' => 'What is the Module name you want to create its Model?',
            'modelName' => 'What is the Model name you want to create?',
        ];
    }

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a Module Model';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $module = $this->argument('module');
        $modelName = $this->argument('modelName');
        $this->info("Creating Model $module/Models/$modelName....");
        $this->newLine();

        if (!File::isDirectory(base_path("app/Modules/$module"))) {
            $this->error("ERROR : Module $module doesn't exist");
            $this->newLine();
            return;
        }

        $baseDir = base_path("app/Modules/$module/Models");
        if (File::isFile("$baseDir/$modelName.php")) {
            $this->error("ERROR : Model $module/Models/$modelName is already exist");
            $this->newLine();
            return;
        }
        File::ensureDirectoryExists($baseDir);

        $stubContent = File::get(app_path("Console/Stubs/model.stub"));
        $content = str_replace("{{ module }}", $module, $stubContent);
        $content = str_replace("{{ modelName }}", $modelName, $content);

        File::put("$baseDir/$modelName.php", $content);
        $this->info("Model $module/Models/$modelName is created");

        $this->newLine();
    }
}
