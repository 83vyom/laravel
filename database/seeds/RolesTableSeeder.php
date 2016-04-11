<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use App\Role;
class RolesTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

        //truncating the table
        DB::statement('SET foreign_key_checks=0');
        Role::truncate();
        DB::statement('SET foreign_key_checks=1');

        //inserting the data
        DB::table('roles')->insert([
            'role'=>'basic user'
        ]);

        DB::table('roles')->insert([
            'role'=>'paid user'
        ]);

        DB::table('roles')->insert([
            'role'=>'super admin'
        ]);

        DB::table('roles')->insert([
            'role'=>'basic admin'
        ]);

        DB::table('roles')->insert([
            'role'=>'questors'
        ]);
    }
}
