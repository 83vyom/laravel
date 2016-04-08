<?php
use App\Course;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        $faker = Faker\Factory::create();
        foreach (range(1,10) as $index) {
            Course::create([
                'course'=>$faker->lastName(),
                'subjectId'=>$faker->numberBetween($min = 1, $max = 5)
            ]);
        }
    }
}
