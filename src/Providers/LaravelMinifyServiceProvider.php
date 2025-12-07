<?php

namespace zakariatlilani\LaravelMinify\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelMinifyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('htmlminify.php'),
            ], 'LaravelMinify');
        }
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'HtmlMinify');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-minify', function () {
            return new LaravelMinifyFacade;
        });

        $this->app['router']->middleware('LaravelMinifyHtml', 'zakariatlilani\LaravelMinify\Middleware\LaravelMinifyHtml');

        $this->app['router']->aliasMiddleware('LaravelMinifyHtml', \zakariatlilani\LaravelMinify\Middleware\LaravelMinifyHtml::class);
        $this->app['router']->pushMiddlewareToGroup('web', \zakariatlilani\LaravelMinify\Middleware\LaravelMinifyHtml::class);
    }
}
