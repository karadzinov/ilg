<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlidersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sliders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('image');
			$table->string('imagemedium');
			$table->string('imagethumb');
			$table->string('link');
			$table->text('description', 65535);
			$table->integer('product_id')->nullable();
			$table->integer('category_id')->nullable();
			$table->integer('user_id')->unsigned()->index('sliders_user_id_foreign');
			$table->integer('workflow_id');
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
		Schema::drop('sliders');
	}

}
