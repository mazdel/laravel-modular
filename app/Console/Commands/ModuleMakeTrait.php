<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ModuleMakeTrait extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:make:trait {traitName}';

    /**
     * Prompt for missing input arguments using the returned questions.
     *
     * @return array<string, string>
     */
    protected function promptForMissingArgumentsUsing(): array
    {
        return [
            'traitName' => 'What is the Trait name you want to create?',
        ];
    }

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a Trait';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $traitName = $this->argument('traitName');
        $this->info("Initiating Trait $traitName....");
        $this->newLine();

        $traitsDir = base_path("app/Traits/");

        File::ensureDirectoryExists($traitsDir);

        $stubContent = File::get(app_path("Console/Stubs/trait.stub"));
        $content = str_replace("{{ traitName }}", $traitName, $stubContent);

        File::put("$traitsDir/$traitName.php", $content);
        $this->info("Trait $traitName is created");

        $this->newLine();
    }
}
