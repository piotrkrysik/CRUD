<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 200; $i++) {
            \DB::table('people')->insert([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'street' => $faker->streetAddress,
                'telnr' => $faker->phoneNumber,
                'country' => $faker->country,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
