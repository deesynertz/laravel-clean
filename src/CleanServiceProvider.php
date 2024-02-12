<?php

namespace Deesynertz\Clean;

use Illuminate\Support\ServiceProvider;

class CleanServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->singleton('toastr', function ($app) {
        //     return new Toastr($app['session'], $app['config']);
        // });

        $this->app->bind('clean.service', function ($app) {
            return new Clean();
        });

       
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         
        // $this->publishes([
        //     __DIR__ . '/config/toastr.php' => config_path('toastr.php'),
        //     ], 'config');

        //     $this->publishes([
        //         __DIR__.'/path/to/config/yourconfig.php' => config_path('yourconfig.php'),
        //     ], 'config');
    }

    // /**
    //  * Get the services provider by the provider
    //  *
    //  * @return array
    //  */
    // public function provides()
    // {
    //     return ['toastr'];
    // }
}
