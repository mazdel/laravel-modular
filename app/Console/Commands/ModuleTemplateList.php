<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ModuleTemplateList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module:template:ls';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get a view template for the Module';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $remoteUrl = "https://minio.armserv.my.id";
        $remoteDir = "{$remoteUrl}/templates";
        $_ack = "L9S13K3938J34BA8T9V2";
        $_ask = "IxHMS75MyV31Y3MtJJScJZAgmy9MVMWvacs11sLC";


        // TODO : GET LIST OF TEMPLATES
        $disk = Storage::build([
            'driver' => 's3',
            'key' => $_ack,
            'secret' => $_ask,
            'region' => 'us-east-1',
            'bucket' => 'templates',
            'endpoint' => $remoteUrl,
            'url' => "{$remoteUrl}",
            'use_path_style_endpoint' => true,
            'throw' => true,
        ]);

        $files = $disk->allFiles();

        if (empty($files)) {
            $this->info('No templates found in the bucket.');

            return self::SUCCESS;
        }

        $this->table(['Templates'], array_map(fn(string $file) => [preg_replace('/\.zip$/i', '', $file)], $files));

        return self::SUCCESS;
    }
}
