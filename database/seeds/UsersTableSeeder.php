<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD


=======
use App\User;
>>>>>>> f74b11659d53379d33464586db70862ecd552bd2

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
            $user->name = $faker->company;
            $user->admin = $faker->name;
            $user->username = $faker->userName;
            $user->email = $faker->safeEmail;
            $user->contactnumber = $faker->phoneNumber;
            $user->password = Hash::make($faker->password);
            $user->bio = $faker->bs;
            $user->howwillyoubenefit = $faker->bs;
            $user->save();
    }
}

}

