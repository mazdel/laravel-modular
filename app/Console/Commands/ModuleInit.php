<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ModuleInit extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:init {moduleName} {--only-api} {--only-web}';

    /**
     * Prompt for missing input arguments using the returned questions.
     *
     * @return array<string, string>
     */
    protected function promptForMissingArgumentsUsing(): array
    {
        return [
            'moduleName' => 'What is the module name you want to init?',
        ];
    }

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initiate a Module';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $moduleName = $this->argument('moduleName');
        $this->info("Initiating Module $moduleName....");
        $this->newLine();

        $baseModule = base_path("app/Modules/$moduleName/");
        if (File::isDirectory($baseModule)) {
            $this->fail('Module is already exist');
            $this->newLine();
        }
        $shouldCreateDirs = [
            "Controllers",
            "Models",
            "Validations",
            "Routes"
        ];
        foreach ($shouldCreateDirs as $dirname) {
            File::ensureDirectoryExists("$baseModule/$dirname");
            $this->info("$moduleName/$dirname created...");
        }

        // creating module controller
        if ($this->option('only-api')) {
            Artisan::call("module:make:controller $moduleName --api");
        } else {
            Artisan::call("module:make:controller $moduleName");
        }


        $routeContent = $this->createRouteFileContent($moduleName);

        if (!$this->option('only-web')) {
            File::put("$baseModule/Routes/api.php", $routeContent);
        }
        if (!$this->option('only-api')) {
            File::put("$baseModule/Routes/web.php", $routeContent);
            File::ensureDirectoryExists("$baseModule/views");
            $this->info("$moduleName/views created...");

            $viewStubPath = "Console/Stubs/view.blade.stub";
            $prefixName = Str::snake($moduleName, "-");

            if (File::exists(app_path($viewStubPath))) {
                $viewStubContent = File::get(app_path($viewStubPath));
                $viewContent = str_replace("{{ moduleTitle }}", Str::headline($moduleName), $viewStubContent);
                $viewContent = str_replace("{{ routePrefix }}", $prefixName, $viewContent);
                File::put("$baseModule/views/index.blade.php", $viewContent);
            } else {
                File::copy(resource_path('views/welcome.blade.php'), "$baseModule/views/index.blade.php");
            }
        }

        $this->info("Module $moduleName is initiated");
        $this->newLine();
    }

    private function createRouteFileContent(string $moduleName)
    {
        $prefixName = Str::snake($moduleName, "-");

        $stubContent = File::get(app_path("Console/Stubs/route.stub"));
        $routeContent = str_replace("{{ module }}", $moduleName, $stubContent);
        $routeContent = str_replace("{{ prefix }}", $prefixName, $routeContent);
        return $routeContent;
    }
}
