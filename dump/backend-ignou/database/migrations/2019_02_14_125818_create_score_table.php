<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student')->unsigned();
            $table->foreign('student')->references('id')->on('student_details');
            $table->integer('subjectcode')->unsigned();
            $table->foreign('subjectcode')->references('id')->on('subject');
            $table->integer('cat')->unsigned();
            $table->foreign('cat')->references('id')->on('category');
            $table->text('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('score');
    }
}
