<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use App\ExamCat;

class ExamCatsTableSeeder extends Seeder
{
    public function run()
    {
        //truncating the table
        DB::statement('SET foreign_key_checks=0');
        ExamCat::truncate();
        DB::statement('SET foreign_key_checks=1');

        //inserting the data
        DB::table('exam_cats')->insert([
            'exam_cat'=>'Engineering'
        ]);

        DB::table('exam_cats')->insert([
            'exam_cat'=>'Medical'
        ]);

        /*
        DB::table('exam_cats')->insert([

        ]);*/
    }
}
