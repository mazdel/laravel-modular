<?php

namespace Mazdel\LaravelModular\Concerns;

trait InteractsWithModules
{
    protected function modulePath(string $module = ''): string
    {
        return rtrim(config('laravel-modular.modules_path', app_path('Modules')), '/').($module === '' ? '' : '/'.$module);
    }

    protected function stubPath(string $stub): string
    {
        return __DIR__.'/../../resources/stubs/'.$stub;
    }
}
