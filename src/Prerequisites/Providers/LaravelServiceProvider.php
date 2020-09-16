<?php

namespace Freedom\Prerequisites\Providers;

use Illuminate\Support\ServiceProvider;
use Freedom\Prerequisites\Impl\Prerequisites;

class LaravelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('prerequisites',function(){
            return new Prerequisites();
        });
        $this->publishes([
            __DIR__.'/../../config/prerequisites.php' => config_path('prerequisites.php'),
        ], 'config');
        $this->mergeConfigFrom(__DIR__.'/../../config/prerequisites.php', 'prerequisites');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }

}
