<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Example\Controllers\MainController;

Route::group(['prefix' => 'example', 'as' => 'example.'], function () {
        Route::get('/', [MainController::class, 'index'])->name('index');
});
