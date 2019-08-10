<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes__units', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_id');
            $table->string('unit_name',255);
            $table->text('unit_description');
            $table->text('unit_application');
            $table->text('unit_importantQuestions');
            $table->text('unit_reference');
            $table->text('unit_author_name');
            $table->text('unit_author_email');
            $table->integer('published');
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
        Schema::dropIfExists('notes__units');
    }
}
