<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaticpageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staticpage', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('slug');
			$table->string('image');
			$table->string('imagemedium');
			$table->string('imagethumb');
			$table->text('description', 65535);
			$table->integer('user_id')->unsigned()->index('staticpage_user_id_foreign');
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
		Schema::drop('staticpage');
	}

}
