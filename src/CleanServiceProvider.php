<?php

namespace Deesynertz\Clean;

use Deesynertz\Clean\CleanCommand;
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

        // $this->app->bind('clean.service', function ($app) {
        //     return new CleanCommand();
        // });       
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([CleanCommand::class,]);
        }
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
