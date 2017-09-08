<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendeeTable extends Migration
{
    /**
     * Run the migrations.*
     * @return void*/

    public function up()
    {
        Schema::create('attendee', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('non_profit_id')->references('non_profit_id')->on('users');
            $table->integer('event_id')->references('event_id')->on('posts');
            $table->integer('employee_id')->references('employee_id')->on('users');
            $table->decimal('hrs_to_complete');
            $table->decimal('actual_hours');
            $table->string('did_attend_yes');
            $table->string('did_attend_no');
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
