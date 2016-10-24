<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//create table attendaces
		Schema::create('attendaces', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id');
            $table->enum('status', ['attend','paid_leave', 'sick', 'leave_early']);
            $table->date('date');
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
		//
		Schema::drop('attendaces');
	}

}
