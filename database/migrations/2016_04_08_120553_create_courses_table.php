<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('quesdb')->create('courses', function(Blueprint $table){
            $table->increments('id');
            $table->string('course');
            $table->integer('subjectId')->unsigned();

            $table->foreign('subjectId')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('quesdb')->dropIfExists('courses');
    }
}
