<?php namespace QuanDT\Slider;

use Illuminate\Support\ServiceProvider;

class SliderServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		include __DIR__.'/routes.php';
		include __DIR__.'/formHelper.php';

		$this->loadViewsFrom(__DIR__.'/views', 'slider');

		$this->publishes([
			__DIR__.'/views' => base_path('resources/views/quandt/slider'),
		]);

		$this->publishes([
		    __DIR__.'/migrations' => $this->app->databasePath().'/migrations',
		]);

		$this->publishes([
			__DIR__.'/config/slider.php' => config_path('slider.php'),
		]);

		$this->publishes([
			__DIR__.'/assets' => asset('/'),
		]);
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->mergeConfigFrom(
	        __DIR__.'/config/slider.php', 'slider'
	    );
	}

}
