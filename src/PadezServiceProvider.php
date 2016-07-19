<?php

namespace Shonetow\Padezi;

use Illuminate\Support\ServiceProvider;

class PadezServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $source = realpath(__DIR__ . '/../config/padezi.php');
        $this->publishes([$source => config_path('padezi.php')]);
        $this->mergeConfigFrom($source, 'padezi');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('padez', function () {
            return $this->app->make(PadezManager::class);
        });
    }
}
