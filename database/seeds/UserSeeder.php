<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => 'contact@ilg.mk',
            'password' => Hash::make('temp12345'),
            'role' => 'admin',
            'image' => $faker->image,
            'imagethumb' => $faker->image,

        ]);


    }
}
