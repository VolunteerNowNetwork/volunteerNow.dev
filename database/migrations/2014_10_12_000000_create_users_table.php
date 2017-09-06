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
            // $table->increments('user_group');
            $table->string('name');
            $table->string('admin')->nullable();
            $table->string('username');
            $table->string('contactnumber');
<<<<<<< HEAD
            $table->string('websitelink');
            $table->integer('employerID')->nullable();
            $table->integer('taxID')->nullable();
            $table->string('bio')->nullable();
            $table->integer('availablehours');
            $table->string('howwillyoubenefit')->nullable();
            $table->string('areyouacorporatesponsor')->nullable();
            $table->string('withwho')->nullable();
            // $table->photo();
=======
            $table->string('websitelink')->nullable();
            $table->integer('employerID')->nullable();
            $table->integer('employeeID')->nullable();
            $table->integer('nonProfitID')->nullable();
            $table->integer('taxID')->nullable();
            $table->string('bio')->nullable();
            $table->string('availablehours')->nullable();
            $table->string('howwillyoubenefit')->nullable();
            $table->string('areyouacorporatesponsor')->nullable();
            $table->string('withwho')->nullable();
>>>>>>> f74b11659d53379d33464586db70862ecd552bd2
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




