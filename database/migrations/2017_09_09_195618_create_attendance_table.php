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
           Schema::create('attendance', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id')->unsigned()->nullable;
            $table->foreign('event_id')->references('id')->on('posts');
            $table->integer('user_id')->unsigned()->nullable;
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('employer_id')->nullable();
            $table->string('start')->nullable();
            $table->decimal('hrs_to_complete')->nullable();
            $table->integer('num_of_people')->nullable();
            $table->string('did_they_attend')->nullable();
            $table->string('hours_completed')->nullable();
            $table->string('comments')->nullable();
            $table->rememberToken();
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
            Schema::table('attendance', function($table){
            $table->dropForeign(['event_id']);
            $table->dropForeign(['user_id']);
            });
    }
}
