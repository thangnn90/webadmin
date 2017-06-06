<?php

use Illuminate\Database\Seeder;

class ClinicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 50;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('clinic')->insert([ //,
                'name' => $faker->name,
                'address' => $faker->address,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
            ]);
        }
    }
}
