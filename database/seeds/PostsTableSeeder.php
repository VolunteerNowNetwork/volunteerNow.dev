<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();

        $faker = Faker\Factory::create();
        for($i = 1; $i <= 10; $i++) 
        {
            $post = new Post();
            $post->user_group = $faker->text;
            $post->organization_name = $faker->company;
            $post->title = $faker->text;
            $post->start = $faker->dateTimeThisYear();
            $post->end = $faker->dateTimeThisMonth();
            $post->color = $faker->hexcolor;
            $post->location = $faker->address;
            $post->number_of_hours = $faker->uuid;
            $post->number_of_volunteers = $faker->uuid;
            $post->age_restriction = $faker->uuid;
            $post->point_of_contact = $faker->name;
            $post->supplies_needed = $faker->text;
            $post->appropriate_attire = $faker->text;
            $post->categories = $faker->text;
            $post->save();
        }
    }

}
