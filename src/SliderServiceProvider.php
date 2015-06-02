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
		    realpath(__DIR__.'/migrations') => $this->app->databasePath().'/migrations',
		]);

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		
	}

}
