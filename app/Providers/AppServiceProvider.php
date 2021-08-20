<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //dd(env('APP_ENV'));

        // dd(        $this->app->environment('local') );
        // if(env('APP_ENV') != 'local' )
        if(  $this->app->environment('local') != 'local' ){
            $this->app->bind('path.public', function() {
                return base_path().'/../public_html';
            });
        }

    }
}
