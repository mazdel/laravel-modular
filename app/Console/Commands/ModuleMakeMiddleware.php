<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ModuleMakeMiddleware extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:make:middleware
        {module : Module Name}
        {middlewareName : Middleware Name}';

    /**
     * Prompt for missing input arguments using the returned questions.
     *
     * @return array<string, string>
     */
    protected function promptForMissingArgumentsUsing(): array
    {
        return [
            'module' => 'What is the Module name you want to create its Middleware?',
            'middlewareName' => 'What is the Middleware name you want to create?',
        ];
    }

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a Module Middleware';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $module = $this->argument('module');
        $middlewareName = $this->argument('middlewareName');
        $this->info("Creating Middleware $module/Middlewares/$middlewareName....");
        $this->newLine();

        if (!File::isDirectory(base_path("app/Modules/$module"))) {
            $this->error("ERROR : Module $module doesn't exist");
            $this->newLine();
            return;
        }

        $baseDir = base_path("app/Modules/$module/Middlewares");
        if (File::isFile("$baseDir/$middlewareName.php")) {
            $this->error("ERROR : Middleware $module/Middlewares/$middlewareName is already exist");
            $this->newLine();
            return;
        }
        File::ensureDirectoryExists($baseDir);

        $stubContent = File::get(app_path("Console/Stubs/middleware.stub"));
        $content = str_replace("{{ module }}", $module, $stubContent);
        $content = str_replace("{{ middlewareName }}", $middlewareName, $content);

        File::put("$baseDir/$middlewareName.php", $content);
        $this->info("Middleware $module/Middlewares/$middlewareName is created");

        $this->newLine();
    }
}
