<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LocationsSeeder extends Seeder
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
            \DB::table('locations')->insert(array(
                   'name'  => $faker->randomElement(['San Miguel de Tucuman','Salta1','Resistencia1',
                   'San Salvador de Jujuy','Oran1','San Luis1','Salta1','Rio de Janerio1','Valparaiso1','Santiago de Chile1'
                   ,'San Pablo1','Lima1','Potosi1','Montevideo1']),
                   'town_id'  => $faker->randomElement(['1','2','3','4','5','6','7']),
            ));
        }
    }
}
