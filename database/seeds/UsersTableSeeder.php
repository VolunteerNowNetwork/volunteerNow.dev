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
            $user->organizationName = $faker->company;
            $user->admin = $faker->name;
            $user->username = $faker->name;
            $user->contactnumber = $faker->phoneNumber;
            $user->websiteLink = $faker->url;
            $user->employerId = $faker->uuid;
            $user->employeeId = $faker->uuid;
            $user->nonProfitId = $faker->uuid;
            $user->taxId = $faker->creditCardNumber;
            $user->bio = $faker->bs;
            $user->availableHours = $faker->numberBetween($min = 1, $max = 100);
            $user->additionalResources = "stuff";
            $user->benefit = $faker->bs;
            $user->corporateSponsor = "yes";
            $user->withWho = $faker->bs;
            $user->email = $faker->safeEmail;
            $user->password = Hash::make($faker->password);
            $user->save();
    }
}

}
