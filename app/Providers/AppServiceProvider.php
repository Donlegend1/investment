<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{


    /**
     * Register any application modules.
     *
     * @return void
     */
    public function register()
    {
        Paginator::defaultView('frontend.include.__pagination');
    }

    /**
     * Bootstrap any application modules.
     *
     * @return void
     */
    public function boot()
    {
    }
}
