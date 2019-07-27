<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\MesinInferensi;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MesinInferensi::class, function ($app) {
            return new MesinInferensi();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
