<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('admin')->nullable();
            $table->string('username');
            $table->string('contactnumber');
            $table->string('websitelink')->nullable();
            $table->integer('employerID')->nullable();
            $table->integer('taxID')->nullable();
            $table->string('bio')->nullable();
            $table->string('availablehours')->nullable();
            $table->string('howwillyoubenefit')->nullable();
            $table->string('areyouacorporatesponsor')->nullable();
            $table->string('withwho')->nullable();
            $table->string('email')->unique();
            $table->string('password', 60);
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
        Schema::drop('users');
    }
}
