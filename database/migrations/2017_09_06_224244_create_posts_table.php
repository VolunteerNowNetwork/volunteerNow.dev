<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_group');
            $table->string('organization_name');
            $table->integer('event_id');
            $table->string('event_title');
            $table->float('location');
            $table->float('number_of_hours');
            $table->integer('number_of_volunteers');
            $table->integer('age_restriction');
            $table->string('point_of_contact');
            $table->string('supplies_needed');
            $table->string('appropriate_attire');
            $table->string('categories');
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
            Schema::drop('posts');
        }


}
