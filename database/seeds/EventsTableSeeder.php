<?php

use Illuminate\Database\Seeder;
use App\Models\Events;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->delete();

        $faker = Faker\Factory::create();
       
        for ($i = 1; $i <= 10; $i++) {
            $event = new Event();
            $event->userGroup
            $event->organizationName = $faker->company;
            $event->eventId = $faker->text;
            $event->eventTitle = $faker->text;
            $event->location = $faker->address;
            $event->numberOfHours = $faker->uuid;
            $event->numberOfVolunteers = $faker->uuid;
            $event->ageRestriction = $faker->uuid;
            $event->pointOfContact = $faker->person;
            $event->suppliesNeeded = $faker->lorem;
            $event->appropriateAttire = $faker->lorem;
            $event->catagories = $faker->color;
            $event->save();
    }
}
