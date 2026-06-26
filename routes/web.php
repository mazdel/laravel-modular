<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

$modulePath = app_path('Modules');
$webRouteFiles = File::glob("$modulePath/*/Routes/web.php");

Route::get('/', function () {
    return view('welcome');
});

foreach ($webRouteFiles as $file) {
    Route::group([
        'as' => '',
        'prefix' => ''
    ], function () use ($file) {
        include $file;
    });
}
