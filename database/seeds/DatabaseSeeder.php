<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(StatesSeeder::class);
        $this->call(TwonsSeeder::class);
        $this->call(LocationsSeeder::class);
    }
}
