<?php

use Illuminate\Support\Facades\Route;
use App\Modules\ExampleApi\Controllers\MainController;

Route::group(['prefix' => 'example-api', 'as' => 'example-api.'], function () {
        Route::get('/', [MainController::class, 'index'])->name('index');
});
