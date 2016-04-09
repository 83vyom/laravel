<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ExamCatsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,5) as $index) {
            Course::create([
                'examCat'=>$faker->lastName()
            ]);
        }
    }
}
