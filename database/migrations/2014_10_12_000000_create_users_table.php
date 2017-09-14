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
            $table->string('organization_name');
            $table->string('name');
            $table->string('user_group')->nullable;
            $table->string('admin')->nullable();
            $table->string('username');
            $table->string('contact_number');
            $table->string('website_link')->nullable();
            $table->integer('employer_id')->nullable();   
            $table->integer('tax_id')->nullable();
            $table->string('bio')->nullable();
            $table->string('available_hours')->nullable();
            $table->string('completed_hours')->nullable();
            $table->string('additional_resources')->nullable();
            $table->string('benefit')->nullable();
            $table->string('corporate_sponsor')->nullable();
            $table->string('with_who')->nullable();
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
