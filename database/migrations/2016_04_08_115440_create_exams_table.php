<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function(Blueprint $table){
            $table->increments('id');
            $table->string('exam', 10);
            $table->string('exam_name', 100);
            $table->integer('cat_id')->unsigned();

            $table->foreign('cat_id')->references('id')->on('exam_cats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
}
