<?php

use Illuminate\Database\Seeder;

use App\User;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 10; $i++) {
            $user = new User();
            $user->organization_name = $faker->company;
            $user->user_group = 'nonprofit';
            $user->admin = $faker->name;
            $user->name = $faker->name;
            $user->username = $faker->name;
            $user->contact_number = $faker->phoneNumber;
            $user->website_link = $faker->url;
            $user->employer_id = $faker->uuid;
            $user->employee_id = $faker->uuid;
            $user->non_profit_id = $faker->uuid;
            $user->tax_id = $faker->creditCardNumber;
            $user->bio = $faker->bs;
            $user->available_hours = $faker->numberBetween($min = 1, $max = 100);
            $user->completed_hours = $faker->numberBetween($min = 1, $max = 100);
            $user->additional_resources = "stuff";
            $user->benefit = $faker->bs;
            $user->corporate_sponsor = "yes";
            $user->with_who = $faker->bs;
            $user->email = $faker->safeEmail;
            $user->password = Hash::make($faker->password);
            $user->img = $faker->imageUrl($width = 400, $height = 200, 'people');
            $user->save();
    }
}

}
