<?php

namespace Mazdel\LaravelModular;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use Mazdel\LaravelModular\Commands\ModuleInit;
use Mazdel\LaravelModular\Commands\ModuleMakeController;
use Mazdel\LaravelModular\Commands\ModuleMakeMiddleware;
use Mazdel\LaravelModular\Commands\ModuleMakeModel;
use Mazdel\LaravelModular\Commands\ModuleMakeRequest;
use Mazdel\LaravelModular\Commands\ModuleMakeTrait;
use Mazdel\LaravelModular\Commands\ModuleMakeValidation;
use Mazdel\LaravelModular\Commands\ModuleTemplateGet;
use Mazdel\LaravelModular\Commands\ModuleTemplateList;

class LaravelModularServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-modular.php', 'laravel-modular');
        $this->mergeConfigFrom(__DIR__ . '/../config/view.php', 'view');
        $this->mergeConfigFrom(__DIR__ . '/../config/cors.php', 'cors');
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/laravel-modular.php' => config_path('laravel-modular.php'),
            __DIR__ . '/../config/view.php' => config_path('view.php'),
            __DIR__ . '/../config/cors.php' => config_path('cors.php'),
        ], 'laravel-modular-config');

        if ($this->app->runningInConsole()) {
            $this->commands([
                ModuleInit::class,
                ModuleMakeController::class,
                ModuleMakeMiddleware::class,
                ModuleMakeModel::class,
                ModuleMakeRequest::class,
                ModuleMakeTrait::class,
                ModuleMakeValidation::class,
                ModuleTemplateGet::class,
                ModuleTemplateList::class,
            ]);
        }

        $this->loadModuleRoutes();
    }

    private function loadModuleRoutes(): void
    {
        $modulesPath = config('laravel-modular.modules_path', app_path('Modules'));

        foreach (File::glob($modulesPath . '/*/Routes/web.php') as $route) {
            $this->app['router']->middleware(config('laravel-modular.web.middleware'))
                ->group($route);
        }

        foreach (File::glob($modulesPath . '/*/Routes/api.php') as $route) {
            $this->app['router']->prefix(config('laravel-modular.api.prefix'))
                ->as(config('laravel-modular.api.name'))
                ->middleware(config('laravel-modular.api.middleware'))
                ->group($route);
        }
    }
}
