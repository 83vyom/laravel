<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use App\Subject;

class SubjectsTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

        //truncating the table
        DB::statement('SET foreign_key_checks=0');
        Subject::truncate();
        DB::statement('SET foreign_key_checks=1');

        //inserting data
        DB::table('subjects')->insert([
            'subject'=>'Physics'
        ]);

        DB::table('subjects')->insert([
            'subject'=>'Chemistry'
        ]);

        DB::table('subjects')->insert([
            'subject'=>'Mathematics'
        ]);

        DB::table('subjects')->insert([
            'subject'=>'Biology'
        ]);

        DB::table('subjects')->insert([
            'subject'=>'English'
        ]);
    }
}
