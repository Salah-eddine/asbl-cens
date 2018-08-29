<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ImageManager;
class ImageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton( 'cornichon' ,function ($app) {
            return new ImageManager();
        });
    }
}
