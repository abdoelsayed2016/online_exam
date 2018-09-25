<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffQuestionsAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_questions_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('QUESTION_ID');
            $table->double('Student_Points')->nullable();
            $table->integer('STUDENT_COURSE_EXAM_ID');
            $table->text('QUESTION_ANSWER')->nullable();
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
        Schema::dropIfExists('staff_questions_answers');
    }
}
