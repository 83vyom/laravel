<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examSubjects', function(Blueprint $table){
            $table->increments('id');
            $table->string('examSubject');
            $table->integer('examId')->unsigned();
            $table->integer('subjectId')->unsigned();

            $table->foreign('examId')->references('id')->on('exams');
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
        Schema::dropIfExists('examSubjects');
    }
}
