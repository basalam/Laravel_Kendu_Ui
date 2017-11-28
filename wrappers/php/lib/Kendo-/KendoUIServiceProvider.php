<?php

namespace Kendo;

use Illuminate\Support\ServiceProvider;

class KendoUIServiceProvider extends ServiceProvider {

    /**
     * Kendo assets.
     *
     * @return void
     */
    public function boot()
    {
		$this->publishes([
			__DIR__.'/../../content/' => public_path('vendor/synytskiy'),
		], 'public');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['laravel-kendo-ui'] = $this->app->share(function($app)
        {
            return new DataSourceManager($app);
        });
    }

}
