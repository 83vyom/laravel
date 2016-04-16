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

        //truncating the table
        DB::statement('SET foreign_key_checks=0');
        Course::truncate();
        DB::statement('SET foreign_key_checks=1');

        //inserting data
        //TODO::insert proper data
        DB::table('courses')->insert([
            'course'=>'phy1',
            'subject_id'=>'1',
            'order'=>'1'
        ]);

        DB::table('courses')->insert([
            'course'=>'phy2',
            'subject_id'=>'1',
            'order'=>'2'
        ]);

        DB::table('courses')->insert([
            'course'=>'chm1',
            'subject_id'=>'2',
            'order'=>'1'
        ]);

        DB::table('courses')->insert([
            'course'=>'mth1',
            'subject_id'=>'3',
            'order'=>'1'
        ]);
    }
}
