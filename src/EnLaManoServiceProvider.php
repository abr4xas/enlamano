<?php

namespace Abr4xas\EnLaMano;

use Illuminate\Support\ServiceProvider;

class EnLaManoServiceProvider extends ServiceProvider
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/enlamano.php' => config_path('enlamano.php'),
            ], 'config');
        }
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/enlamano.php', 'enlamano');

        $this->app->singleton('EnLaMano', function () {
            return new EnLaMano();
        });
    }
}
