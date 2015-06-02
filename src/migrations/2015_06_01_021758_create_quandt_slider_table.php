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
			$table->boolean('navigation');
			$table->bigInteger('slideSpeed');
			$table->bigInteger('paginationSpeed');
			$table->boolean('singleItem');

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
