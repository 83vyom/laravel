<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
//use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ExamCatsTableSeeder::class);
        $this->call(ExamsTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
    }
}
