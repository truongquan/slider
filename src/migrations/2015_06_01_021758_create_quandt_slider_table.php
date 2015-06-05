<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuandtSliderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quandt_slider', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('name');
			$table->string('slug');
			$table->string('sliderType');
			$table->string('navigation', 10)->nullable();
			$table->bigInteger('slideSpeed')->nullable();
			$table->bigInteger('paginationSpeed')->nullable();
			$table->string('singleItem', 10)->nullable();
			$table->bigInteger('autoPlay')->nullable();
			$table->integer('items')->nullable();
			$table->string('itemsDesktop', 20)->nullable();
			$table->string('itemsDesktopSmall', 20)->nullable();
			$table->string('itemsTablet', 20)->nullable();
			$table->string('itemsMobile', 10)->nullable();
			$table->string('itemsCustom')->nullable();
			$table->string('lazyLoad', 10)->nullable();
			$table->string('stopOnHover', 10)->nullable();
			$table->string('autoHeight', 10)->nullable();
			$table->bigInteger('goToFirstSpeed')->nullable();

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('quandt_slider');
	}

}
