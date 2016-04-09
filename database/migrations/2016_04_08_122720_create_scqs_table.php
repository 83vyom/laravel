<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scqs', function(Blueprint $table){
            $table->increments('id');
            $table->integer('topicId')->unsigned();
            $table->integer('courseId')->unsigned();
            $table->integer('subjectId')->unsigned();
            $table->integer('quesTypeId')->unsigned();
            $table->string('scq');
            $table->string('scqImg');
            $table->string('option1');
            $table->string('option2');
            $table->string('option3');
            $table->string('option4');
            $table->string('hint');
            $table->tinyInteger('answer');
            $table->string('solution');
            $table->tinyInteger('level')->default(0);
            $table->integer('rating')->default(1000);
            $table->integer('totalCount')->default(0);
            $table->integer('correctCount')->default(0);

            $table->foreign('topicId')->references('id')->on('topics');
            $table->foreign('courseId')->references('id')->on('courses');
            $table->foreign('subjectId')->references('id')->on('subjects');
            $table->foreign('quesTypeId')->references('id')->on('quesTypes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scqs');
    }
}
