<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable.php extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userGroup');
            $table->string('organizationName');
            $table->integer('eventId');
            $table->integer('eventTitle');
            $table->float('location');
            $table->float('numberOfHours');
            $table->string('numberOfVolunteers');
            $table->string('ageRestriction');
            $table->string('pointOfContact');
            $table->string('suppliesNeeded');
            $table->string('appropriateAttire');
            $table->string('catagories');
            $table->rememberToken();
            $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
