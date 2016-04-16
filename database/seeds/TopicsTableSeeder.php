<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use App\Topic;

class TopicsTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

        //truncate the table
        DB::statement('SET foreign_key_checks=0');
        Topic::truncate();
        DB::statement('SET foreign_key_checks=1');

        //insert data
        DB::table('topics')->insert([
            'topic'=>'topic1',
            'course_id'=>'1',
            'order'=>'1'
        ]);

        DB::table('topics')->insert([
            'topic'=>'topic2',
            'course_id'=>'1',
            'order'=>'2'
        ]);

        DB::table('topics')->insert([
            'topic'=>'topic3',
            'course_id'=>'1',
            'order'=>'3'
        ]);

        DB::table('topics')->insert([
            'topic'=>'topic4',
            'course_id'=>'2',
            'order'=>'1'
        ]);

        DB::table('topics')->insert([
            'topic'=>'topic5',
            'course_id'=>'3',
            'order'=>'1'
        ]);

        DB::table('topics')->insert([
            'topic'=>'topic6',
            'course_id'=>'3',
            'order'=>'2'
        ]);
    }
}
