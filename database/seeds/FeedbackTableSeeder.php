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
            $feedback->employee_name = $faker->name;
            $feedback->organization_name = $faker->company;
            $feedback->title = $faker->bs;
            $feedback->employer_id = $faker->numberBetween($min = 1, $max = 100);
            $feedback->event_date = $faker->date;
            $feedback->comments = $faker->bs;
            $feedback->save();
    }
}

}