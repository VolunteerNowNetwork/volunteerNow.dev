<?php

use Illuminate\Database\Seeder;

use app\User;
use App\Models\Attendance;

class AttendanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.  *
     * @return void  */

    public function run()
    {
        DB::table('attendance')->delete();

        $faker = Faker\Factory::create();
        for($i = 1; $i <= 30; $i++)
        {
            $attendance = new Attendance();
            $attendance->event_id = \App\Models\Post::all()->random()->id;
            $attendance->user_id = \App\User::all()->random()->id;
            $attendance->title = $faker->bs;
            $attendance->name = $faker->name;
            $attendance->location = $faker->bs;
            $attendance->organization_name = $faker->bs;
            $attendance->employer_id = $faker->numberBetween($min = 1, $max = 4);
            $attendance->start = "2017-09-05 05:51:37";
            $attendance->hrs_to_complete = $faker->numberBetween($min = 1, $max = 20);
            $attendance->num_of_people = $faker->numberBetween($min = 1, $max = 4);
            $attendance->did_they_attend = $faker->bs;
            $attendance->hours_completed = $faker->numberBetween($min = 1, $max = 6);
            $attendance->comments = $faker->bs;
            $attendance->save();
        }
    }
}
