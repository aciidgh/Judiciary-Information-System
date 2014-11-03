<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasemodelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('case_model', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('casename', 255);
			$table->string('defendant', 255);
			$table->string('defaddress', 255);
			$table->string('crimetype', 255);
			$table->date('date');
			$table->string('location', 255);
			$table->string('officer', 255);
			$table->date('arrestdate');
			$table->string('judge', 255);
			$table->string('judgement', 255);
			$table->date('dateclosed');
			$table->string('prosecutor', 255);
			$table->date('startdate');
			$table->date('expectedcomplete');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('case_model');
	}
}
