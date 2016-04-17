<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use QuesType;

class QuesTypesTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        //truncating the table
        DB::statement('SET foreign_key_checks=0');
        QuesType::truncate();
        DB::statement('SET foreign_key_checks=1');

        //inserting the data
        DB::table('ques_types')->insert([
            'ques_type'=>'scq'
        ]);

        DB::table('ques_types')->insert([
            'ques_type'=>'mcq'
        ]);

        DB::table('ques_types')->insert([
            'ques_type'=>'mtf'
        ]);
    }
}
