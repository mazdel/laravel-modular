<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ModuleMakeController extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:make:controller
        {module : Module Name}
        {controllerName? : Controller Name, default is MainController}';

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

        $baseDir = base_path("app/Modules/$module/Controllers");
        if (!File::isDirectory(base_path("app/Modules/$module"))) {
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

        $stubContent = File::get(app_path("Console/Stubs/controller.stub"));
        $content = str_replace("{{ controllerName }}", $controllerName, $stubContent);

        File::put("$baseDir/$controllerName.php", $content);
        $this->info("Controller $module/Controllers/$controllerName is created");

        $this->newLine();
    }
}
