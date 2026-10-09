<?php

namespace Mazdel\DayRavel\Concerns;

trait InteractsWithModules
{
    protected function modulePath(string $module = ''): string
    {
        return rtrim(config('dayravel.modules_path', app_path('Modules')), '/') . ($module === '' ? '' : '/' . $module);
    }

    protected function stubPath(string $stub): string
    {
        return __DIR__ . '/../../resources/stubs/' . $stub;
    }
}
