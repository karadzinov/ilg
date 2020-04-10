<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    public function run()
    {
        $faker = Faker\Factory::create();

        $image = $faker->imageUrl();
        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => 'contact@ilg.mk',
            'password' => Hash::make('temp12345'),
            'role' => 'admin',
            'image' => $image,
            'imagethumb' => $image
        ]);

    }
}