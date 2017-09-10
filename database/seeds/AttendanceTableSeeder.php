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
            $attendance->event_id = $faker->numberBetween($min = 1, $max = 20);
            $attendance->user_id = $faker->numberBetween($min = 1, $max = 20);
            $attendance->hrs_to_complete = $faker->numberBetween($min = 1, $max = 20);
            $attendance->title = $faker->bs;
            $attendance->num_of_people = $faker->numberBetween($min = 1, $max = 4);
            $attendance->save();
        }
    }
}

