<?php

namespace Litecms\Service\Providers;

use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'service');

        // Load translation
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'service');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Call pblish redources function
        $this->publishResources();

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/config.php', 'litecms.service');

        // Bind facade
        $this->app->bind('litecms.service', function ($app) {
            return $this->app->make('Litecms\Service\Service');
        });

                // Bind Service to repository
        $this->app->bind(
            'Litecms\Service\Interfaces\ServiceRepositoryInterface',
            \Litecms\Service\Repositories\Eloquent\ServiceRepository::class
        );

        $this->app->register(\Litecms\Service\Providers\AuthServiceProvider::class);
        
        $this->app->register(\Litecms\Service\Providers\RouteServiceProvider::class);
                
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['litecms.service'];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__ . '/../../config/config.php' => config_path('litecms/service.php')], 'config');

        // Publish admin view
        $this->publishes([__DIR__ . '/../../resources/views' => base_path('resources/views/vendor/service')], 'view');

        // Publish language files
        $this->publishes([__DIR__ . '/../../resources/lang' => base_path('resources/lang/vendor/service')], 'lang');

        // Publish storage files
        $this->publishes([__DIR__ . '/../../storage' => base_path('storage')], 'storage');

        // Publish public files and assets.
        $this->publishes([__DIR__ . '/public/' => public_path('/')], 'public');
    }
}
