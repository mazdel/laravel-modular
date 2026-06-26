<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

$modulePath = app_path('Modules');
$apiRouteFiles = File::glob("$modulePath/*/Routes/api.php");

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


foreach ($apiRouteFiles as $file) {
    Route::group([
        'as' => 'api.v1.',
        'prefix' => 'v1'
    ], function () use ($file) {
        include $file;
    });
}
