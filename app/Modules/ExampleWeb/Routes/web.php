<?php

use Illuminate\Support\Facades\Route;
use App\Modules\ExampleWeb\Controllers\MainController;

Route::group(['prefix' => 'example-web', 'as' => 'example-web.'], function () {
        Route::get('/', [MainController::class, 'index'])->name('index');
});
