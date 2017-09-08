<?php

use Illuminate\Database\Seeder;

use app\User;
use App\Models;

class AttendanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.  *
     * @return void  */

    public function run()
    {
        DB::table('attendee')->delete();

        $faker = Faker\Factory::create();
        for($i = 1; $i <= 30; $i++)
        {
            $attendee = new Attendee();
            $attendee->non_profit_id = $faker->uuid;
            $attendee->event_id = $faker->uuid;
            $attendee->employee_id = $faker->uuid;
            $attendee->hrs_to_complete = $faker->numberBetween($min = 1, $max = 20);
            $attendee->actual_hours = $faker->numberBetween($min = 1, $max = 20);
            $attendee->did_attend_yes = "yes";
            $attendee->did_attend_no = "n/a";
            $attendee->save();
        }
    }
}
