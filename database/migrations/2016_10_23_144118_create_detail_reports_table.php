<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('detail_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id');
            $table->string('report_title');
            $table->longText('report_detail');
            $table->dateTime('start');
            $table->dateTime('finish');
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
		Schema::drop('detail_reports');
	}

}
