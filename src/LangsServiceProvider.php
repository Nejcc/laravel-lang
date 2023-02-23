<?php

namespace Nejcc\LaravelPlus\Langs;

use Illuminate\Support\ServiceProvider;
use Nejcc\LaravelPlus\Langs\Commands\LocalizationsCommand;

class LangsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-langs');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-langs');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('laravelplus-langs.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravelplus-langs'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravelplus-langs'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravelplus-langs'),
            ], 'lang');*/

            // Registering package commands.
            $this->commands([
                LocalizationsCommand::class
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'laravelplus-langs');

        // Register the main class to use with the facade
        $this->app->singleton('laravelplus-langs', function () {
            return new Langs;
        });
    }
}
