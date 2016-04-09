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
            $table->integer('topic_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->integer('subject_id')->unsigned();
            $table->integer('ques_type_id')->unsigned();
            $table->string('scq');
            $table->string('scq_img');
            $table->string('option1');
            $table->string('option2');
            $table->string('option3');
            $table->string('option4');
            $table->string('hint');
            $table->tinyInteger('answer');
            $table->string('solution');
            $table->tinyInteger('level')->default(0);
            $table->integer('rating')->default(1000);
            $table->integer('total_count')->default(0);
            $table->integer('correct_count')->default(0);

            $table->foreign('topic_id')->references('id')->on('topics');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('ques_type_id')->references('id')->on('ques_types');

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
