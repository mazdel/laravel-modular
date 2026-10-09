<?php

namespace Mazdel\LaravelModular\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Mazdel\LaravelModular\Concerns\InteractsWithModules;

class ModuleMakeModel extends Command implements PromptsForMissingInput
{
    use InteractsWithModules;

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

        if (! File::isDirectory($this->modulePath($module))) {
            $this->error("ERROR : Module $module doesn't exist");
            $this->newLine();

            return;
        }

        $baseDir = $this->modulePath("$module/Models");
        if (File::isFile("$baseDir/$modelName.php")) {
            $this->error("ERROR : Model $module/Models/$modelName is already exist");
            $this->newLine();

            return;
        }
        File::ensureDirectoryExists($baseDir);

        $stubContent = File::get($this->stubPath('model.stub'));
        $tableName = Str::snake(Str::plural($modelName));

        $content = str_replace('{{ module }}', $module, $stubContent);
        $content = str_replace('{{ modelName }}', $modelName, $content);
        $content = str_replace('{{ tableName }}', $tableName, $content);

        File::put("$baseDir/$modelName.php", $content);
        $this->info("Model $module/Models/$modelName is created");

        $this->newLine();
    }
}
