<?php

namespace Coleus\Music;

use Illuminate\Support\ServiceProvider;

class MusicServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'system');
        $this->mergeConfigFrom(__DIR__.'/config/system.php', 'system');
        $this->publishes([
            __DIR__.'/resources/dist' => public_path('dist/coleus/system')
        ], 'dist');

        $this->app->bind('system', function ($app) {
            return new Music();
        });
    }

    public function boot()
    {
        //
    }
}
