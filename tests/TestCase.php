<?php

namespace Mazdel\DayRavel\Tests;

use Mazdel\DayRavel\DayRavelServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [DayRavelServiceProvider::class];
    }
}
