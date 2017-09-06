<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_tracker', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nonProfitID')->references('nonProfitID')->on('users');
            $table->integer('eventId');
            $table->integer('employeeID')->references('employeeID')->on('users');
            $table->float('hrs_to_complete');
            $table->float('actual_hrs');
            $table->string('did_attend_yes');
            $table->string('did_attend_no');
            $table->timestamps();
    }

    /**
     * Reverse the migrations.*
     * @return void*/

    public function down()
    {
        Schema::drop('attendance_tracker');
    }
}
