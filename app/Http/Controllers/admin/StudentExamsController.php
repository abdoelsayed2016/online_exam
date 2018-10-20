<?php

namespace App\Http\Controllers\admin;

use App\Exam;
use App\Http\Controllers\Controller;
use App\Question_choice;
use App\Stud_ques_ans_choice;
use App\Student_cource_exam;
use Illuminate\Http\Request;

class StudentExamsController extends Controller
{
    public function index()
    {

        date_default_timezone_set('Africa/Cairo');

        $today_date = date('m/d/Y');
        $Student_cource_exam = Student_cource_exam::where('EXAM_ID', '!=', 'null')->whereNull('Total_Student_Score')
                                                        ->where('STUDENT_ID', auth()->user()->student->id)->get();
//        dd($Student_cource_exam);
        return view('student.exams', compact('Student_cource_exam', 'today_date'));

    }

    public function startExam(Exam $exam)
    {

        date_default_timezone_set('Africa/Cairo');
        $endTime = date("G:i", strtotime('+' . $exam->EXAM_DURATION . ' minutes', strtotime($exam->time)));
        $start_time = $exam->time;

        if (($exam->time) <= date("G:i") && date("G:i") <= $endTime) {
            session()->put('endTime', $endTime);

//            dd($exam);
            $questions = $exam->questions;
            if ($questions) {
                $questions = $exam->questions->groupBy('QUESTION_TYPE_ID');
            }
//            dd($questions);
            return view('student.startExam', compact('exam', 'questions', 'start_time', 'endTime'));

        } else {
            echo 'Exam Ended';
        }


    }

    public function answerExam(Request $request, Exam $exam)
    {
//        $questions=$exam->questions;
        foreach ($exam->questions as $question) {
            $choices = 'choice_' . $question->id;
            if ($request->$choices) {
                foreach ($request->$choices as $ch) {
                    $Stud_ques_ans_choice = new Stud_ques_ans_choice();
                    $Stud_ques_ans_choice->student_id = auth()->user()->student->id;
                    $Stud_ques_ans_choice->exam_id = $exam->id;
                    $Stud_ques_ans_choice->question_id = $question->id;
                    $Stud_ques_ans_choice->choice = $ch;
                    $Stud_ques_ans_choice->save();

                }
            }
        }

        return redirect()->route('student.exam.result', $exam->id);
    }

    public function resultExam(Exam $exam)
    {
        $answers = Stud_ques_ans_choice::where('student_id', auth()->user()->student->id)->where('exam_id', $exam->id)->get();

        $examQuestions = $exam->questions;
        $total_grade = 0;
        $your_grade = 0;
        foreach ($examQuestions as $examQuestion) {
            $total_grade += $examQuestion->POINTS;
        }
        ///
//		dd($groupExamChoices->groupBy('question_id'));

        $answers = $answers->groupBy('question_id');
        foreach ($answers as $k => $answer) {


            $question = $answer[0]->question;
            if ($question->QUESTION_TYPE_ID == 1 || $question->QUESTION_TYPE_ID == 2) {
                $choice = Question_choice::find($answer[0]->choice);
//                dd($choice);
//                    $question = $choice->question;
                if ($choice->QUESTION_CHOICE_ISCORRECT) {
                    $your_grade += $question->POINTS;
                }
            }
            if ($question->QUESTION_TYPE_ID == 3) {
                $choicess = $question->choices;
                if ($choicess[0] == $answer[0] && $choicess[1] == $answer[1]) {
                    $your_grade += $question->POINTS;

                }
            }


        }
        //update
        $Student_cource_exams=Student_cource_exam::where('COURSE_ID', $exam->COURSE_ID)
                                ->where('STUDENT_ID', auth()->user()->student->id)
                                ->where('EXAM_ID', $exam->id)->first();
        if($Student_cource_exams)
        {
            $Student_cource_exams->Total_Student_Score=$your_grade;
            $Student_cource_exams->save();
        }


        echo $your_grade;
    }
    public function time() {
        date_default_timezone_set('Africa/Cairo');
        $endTime = date("G:i");
        return \Response::json( $endTime );

    }

}
