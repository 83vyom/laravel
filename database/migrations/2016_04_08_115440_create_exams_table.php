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
        Schema::connection('quesdb')->create('exams', function(Blueprint $table){
            $table->increments('id');
            $table->string('exam', 10);
            $table->string('examName', 100);
            $table->foreign('catId')->references('id')->on('examCats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('quesdb')->dropIfExists('exams');
    }
}
