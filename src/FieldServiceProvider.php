<?php

namespace Naif\ToggleSwitchField;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Http\Middleware\Authenticate;
use Laravel\Nova\Nova;
use Illuminate\Support\Facades\Route;
use Naif\SentryChatgpt\Http\Middleware\Authorize;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Nova::serving(function (ServingNova $event) {
            Nova::script('toggle-switch-field', __DIR__.'/../dist/js/field.js');
            Nova::style('toggle-switch-field', __DIR__.'/../dist/css/field.css');
        });

        $this->routes();

    }

    /**
     * Register the tool's routes.
     *
     * @return void
     */
    protected function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        Route::middleware(['nova'])
            ->namespace('Naif\toggle-switch-field\Http\Controllers')
            ->prefix('naif/toggle-switch-field')
            ->group(__DIR__.'/../routes/api.php');
    }
}
