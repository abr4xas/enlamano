<?php

namespace Abr4xas\EnLaMano;

use Abr4xas\EnLaMano\EnLaMano;
use Illuminate\Support\ServiceProvider;

class EnLaManoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/enlamano.php' => config_path('enlamano.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/enlamano.php', 'enlamano');

        $this->app->singleton('EnLaMano', function () {
            return new EnLaMano();
        });
    }
}
