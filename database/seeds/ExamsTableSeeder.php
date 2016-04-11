<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use App\Exam;
class ExamsTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

        //truncating the table
        DB::statement('SET foreign_key_checks=0');
        Exam::truncate();
        DB::statement('SET foreign_key_checks=1');

        //inserting the data
        DB::table('exams')->insert([
            'exam'=>'JEE Mains',
            'exam_name'=>'Joint Entrance Examination Mains',
            'exam_cat_id'=>'1'
        ]);

        DB::table('exams')->insert([
            'exam'=>'JEE Advanced',
            'exam_name'=>'Joint Entrance Examination Advanced',
            'exam_cat_id'=>'1'
        ]);

        DB::table('exams')->insert([
            'exam'=>'BITs',
            'exam_name'=>'Birla Institute of Technology',
            'exam_cat_id'=>'1'
        ]);

        DB::table('exams')->insert([
            'exam'=>'AIPMT',
            'exam_name'=>'All India Pre Medical Test',
            'exam_cat_id'=>'2'
        ]);

    }
}
