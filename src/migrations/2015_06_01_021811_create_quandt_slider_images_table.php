<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuandtSliderImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quandt_slider_images', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('slider_id');
			$table->string('image_original');
			$table->string('image_encrypt');
			$table->string('caption');

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
		Schema::drop('quandt_slider_images');
	}

}
