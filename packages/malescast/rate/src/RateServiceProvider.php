<?php

namespace Malescast\Rate;
use Illuminate\Support\ServiceProvider;

class RateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Malescast\Rate\RateController');
    }
}
