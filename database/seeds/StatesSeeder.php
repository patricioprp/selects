<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 500; $i++) {
            \DB::table('states')->insert(array(
                   'name'  => $faker->randomElement(['Argentina','Brasil','Chile',
                   'Paraguay','Uruguay','Peru','Bolivia','Venezuela','Colombia','Ecuador'])
            ));
        }
    }
}