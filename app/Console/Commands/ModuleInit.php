<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
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
            "Requests",
            "Routes"
        ];
        foreach ($shouldCreateDirs as $dirname) {
            File::ensureDirectoryExists("$baseModule/$dirname");
            $this->info("$moduleName/$dirname created...");
        }

        $prefixName = array_reduce(preg_split('/(?=[A-Z])/', $moduleName), function ($result, $word) {
            if (!$word) return;
            $lowercased = Str::lower($word);
            if (!$result) return $lowercased;
            return "$result-$lowercased";
        }, "");

        $routeContent = $this->createRouteFileContent($prefixName);

        if (!$this->option('only-web')) {
            File::put("$baseModule/Routes/api.php", $routeContent);
        }
        if (!$this->option('only-api')) {
            File::put("$baseModule/Routes/web.php", $routeContent);
            File::ensureDirectoryExists("$baseModule/views");
            $this->info("$moduleName/views created...");
        }

        $this->info("Module $moduleName is initiated");
        $this->newLine();
    }

    private function createRouteFileContent($prefixName)
    {

        $stubContent = File::get(app_path("Console/Stubs/route.stub"));
        $routeContent = str_replace("{{ prefix }}", $prefixName, $stubContent);
        return $routeContent;
    }
}
