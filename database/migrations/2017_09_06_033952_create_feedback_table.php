<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('feedback', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('employee_name')->nullable();
            $table->string('organization_name');
            $table->string('title');
            $table->integer('employer_id');
            $table->date('event_date');
            $table->string('comments');
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
        Schema::drop('feedback');
    }
}
