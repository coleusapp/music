<?php

namespace Coleus\Music;

use Illuminate\Support\ServiceProvider;

class MusicServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'music');
        $this->mergeConfigFrom(__DIR__.'/config/music.php', 'music');
        $this->publishes([
            __DIR__.'/resources/dist' => public_path('dist/coleus/music')
        ], 'dist');

        $this->app->bind('music', function ($app) {
            return new Music();
        });
    }

    public function boot()
    {
        //
    }
}
