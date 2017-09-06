<?php

use Illuminate\Database\Seeder;
use App\Models\Feedback;

class FeedbackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedback')->delete();

        $faker = Faker\Factory::create();
       
        for ($i = 1; $i <= 10; $i++) {
            $feedback = new Feedback();
            $feedback->name = $faker->name;
            $feedback->nonprofitname = $faker->company;
            $feedback->eventname = $faker->bs;
            $feedback->eventdate = $faker->date;
            $feedback->comments = $faker->bs;
            $feedback->save();
    }
}

}
