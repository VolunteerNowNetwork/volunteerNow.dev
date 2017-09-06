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
            $table->string('organizationName');
            $table->string('userGroup');
            $table->string('admin')->nullable();
            $table->string('username');
            $table->string('contactNumber');

            $table->string('websiteLink')->nullable();
            $table->integer('employerId')->nullable();
            $table->integer('employeeId')->nullable();
            $table->integer('nonProfitId')->nullable();
            $table->integer('taxId')->nullable();
            $table->string('bio')->nullable();
            $table->string('availableHours')->nullable();
            $table->string('additionalResources')->nullable;
            $table->string('benefit')->nullable();
            $table->string('corporateSponsor')->nullable();
            $table->string('withWho')->nullable(); 
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->img('image');
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




