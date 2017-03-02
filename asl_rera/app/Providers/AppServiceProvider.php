<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        if ($this->app->environment() == 'local') {
            $this->app->register('Hesto\MultiAuth\MultiAuthServiceProvider');
            $this->app->register('Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider');
            $this->app->register('Collective\Html\HtmlServiceProvider');
        }
    }
}