<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::share('DEVELOPER_NAME', "Aliakbar Rashidi");
        View::share('DEVELOPER_HELLO_SCRIPT', '<script>alert("Hello Dear User.\n Welcome.")</script>');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
