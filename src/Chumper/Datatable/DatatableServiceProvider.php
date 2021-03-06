<?php

namespace Chumper\Datatable;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class DatatableServiceProvider extends ServiceProvider
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
        $this->publishes([
            __DIR__.'/../../config/config.php' => config_path('packages/chumper_datatable.php'),
        ]);
    }

    /**
	 * Register the service provider.
	 *
	 * @return void
	 */
    public function register()
    {
        $this->app->bind('datatable', function (Application $app) {
            return new Datatable;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('datatable');
    }

}
