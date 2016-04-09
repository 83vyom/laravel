<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ExamsTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        /*
        $faker = Faker\Factory::create();
        foreach (range(1,6) as $index) {
            Course::create([
                'exam'=>$faker->lastName()
            ]);
        }*/
    }
}
