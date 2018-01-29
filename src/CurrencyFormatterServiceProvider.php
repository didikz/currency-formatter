<?php

namespace Teknomuslim\CurrencyFormatter;

use Illuminate\Support\ServiceProvider;

class CurrencyFormatterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'CurrencyFormatter');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Teknomuslim\CurrencyFormatter\Controllers\CurrencyFormatterController');
    }
}
