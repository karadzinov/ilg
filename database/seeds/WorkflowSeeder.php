<?php

use Illuminate\Database\Seeder;

class WorkflowSeeder extends Seeder {
    public function run()
    {
        $faker = Faker\Factory::create();

        $image = $faker->imageUrl();
        DB::table('workflow')->insert([
            'name' => 'На почетна',
            'color' => 'colored-palegreen',
        ]);

        DB::table('workflow')->insert([
            'name' => 'Во позадина',
            'color' => 'colored-orange',
        ]);

    }
}