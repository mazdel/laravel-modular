<?php

namespace Mazdel\DayRavel\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\File;
use Mazdel\DayRavel\Concerns\InteractsWithModules;

class ModuleMakeController extends Command implements PromptsForMissingInput
{
    use InteractsWithModules;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:make:controller
        {module : Module Name}
        {controllerName? : Controller Name, default is MainController}
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
            'module' => 'What is the Module name you want to create its Controller?',
        ];
    }

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a Module Controller';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $module = $this->argument('module');
        $controllerName = $this->argument('controllerName') ?? 'MainController';
        $this->info("Creating Controller $module/Controllers/$controllerName....");
        $this->newLine();

        $baseDir = $this->modulePath("$module/Controllers");
        if (! File::isDirectory($this->modulePath($module))) {
            $this->error("ERROR : Module $module doesn't exist");
            $this->newLine();

            return;
        }
        if (File::isFile("$baseDir/$controllerName.php")) {
            $this->error("ERROR : Controller $module/Controllers/$controllerName is already exist");
            $this->newLine();

            return;
        }
        File::ensureDirectoryExists($baseDir);

        $stubPath = 'Console/Stubs/controller.stub';
        if ($this->option('api')) {
            $stubPath = 'Console/Stubs/api.controller.stub';
        }
        $stubContent = File::get($this->stubPath(basename($stubPath)));
        $content = str_replace('{{ module }}', $module, $stubContent);
        $content = str_replace('{{ controllerName }}', $controllerName, $content);

        File::put("$baseDir/$controllerName.php", $content);
        $this->info("Controller $module/Controllers/$controllerName is created");

        $this->newLine();
    }
}
