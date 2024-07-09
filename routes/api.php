<?php

use Illuminate\Support\Facades\Route;

Route::get('/news', [App\Http\Controllers\Api\NewsController::class, 'index'])
    ->name('news.index');
