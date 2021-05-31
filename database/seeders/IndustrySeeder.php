<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++){

          DB::table('industries')->insert([
            'name' => $faker->sentence(1),
            'created_at' => $faker->dateTimeBetween('-1 day' ),
            'updated_at' => $faker->dateTimeBetween('-1 day' ),

          ]);

        }
    }
}
