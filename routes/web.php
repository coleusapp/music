<?php

use Coleus\Music\Http\Controller\MusicController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('music.route_prefix', 'music'),
    'as' => config('music.route_prefix', 'music.'),
    // 'middleware' => HandleInertiaRequests::class,
], function () {
    Route::middleware(['web', 'auth'])->group(function () {
        Route::get('/', [MusicController::class, 'index']);
    });
});
