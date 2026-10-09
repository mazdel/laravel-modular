<?php

namespace Mazdel\LaravelModular\Tests;

use Mazdel\LaravelModular\LaravelModularServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [LaravelModularServiceProvider::class];
    }
}
