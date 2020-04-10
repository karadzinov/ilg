<?php

use Illuminate\Database\Seeder;

class WorkflowSeeder extends Seeder {
    public function run()
    {
        $faker = Faker\Factory::create();

        $image = $faker->imageUrl();
        DB::table('workflow')->insert([
            'name' => 'published',
            'color' => 'colored-palegreen',
        ]);

        DB::table('workflow')->insert([
            'name' => 'waiting',
            'color' => 'colored-orange',
        ]);

    }
}