<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->DateTime('EXAM_STARTDATETIME')->nullable();
            $table->integer('EXAM_DURATION')->nullable();
            $table->integer('COURSE_ID')->nullable();
            $table->integer('STAFF_ID')->nullable();
            $table->integer('SEMESTER_ID')->nullable();
            $table->double('EXAM_TOTAL')->nullable();
            $table->text('EXAM_NAME')->nullable();
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
        Schema::dropIfExists('exams');
    }
}
