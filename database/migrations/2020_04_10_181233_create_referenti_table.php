<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReferentiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('referenti', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('slug');
			$table->string('image');
			$table->string('imagemedium');
			$table->string('imagethumb');
			$table->integer('country_id');
			$table->text('description', 65535);
			$table->integer('user_id')->unsigned()->index('referenti_user_id_foreign');
			$table->integer('workflow_id');
			$table->float('lat', 20, 10);
			$table->float('lng', 20, 10);
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
		Schema::drop('referenti');
	}

}
