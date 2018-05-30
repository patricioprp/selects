<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TwonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 100; $i++) {
            \DB::table('towns')->insert(array(
                   'name'  => $faker->randomElement(['Tucuman','Salta','Chaco',
                   'Jujuy','Oran','San Luis','Salta','Rio de Janerio','Valparaiso','Santiago de Chile'
                   ,'San Pablo','Lima','Potosi','Montevideo']),
                   'state_id'  => $faker->randomElement(['1','2','3','4','5','6','7']),
            ));
        }
    }
}
