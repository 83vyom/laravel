<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\ExamCat;
class ExamCatsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('exam_cats')->insert([
            'exam_cat'=>'Engineering'
        ]);
        /*
        DB::table('examCats')->insert([
            'examCat'=>'Medical'
        ]);*/
    }
}
