<?php

use Illuminate\Support\Facades\Route;

Route::prefix('example')->name('example.')->group(function () {
    Route::get('/', function () {
        return 'example module';
    })->name('index');

    Route::get('/list', function () {
        return 'example list';
    })->name('list');
});
