<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendanceTable extends Migration
{
    /**
     * Run the migrations.*
     * @return void*/

    public function up()
    {
        Schema::create('attendance_tracker', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('non_profitID')->references('nonProfitID')->on('users');
            $table->integer('eventId')->references('eventId')->on('events');
            $table->integer('employeeID')->references('employeeID')->on('users');
            $table->decimal('hrsToComplete');
            $table->decimal('actualHrs');
            $table->string('didAttendYes');
            $table->string('didAttendNo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.*
     * @return void*/

    public function down()
    {
        Schema::drop('attendance_tracker');
    }
}
