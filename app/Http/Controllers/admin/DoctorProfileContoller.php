<?php

namespace App\Http\Controllers\admin;

use App\Exam;
use App\Faculty;
use App\Http\Controllers\Controller;
use App\Ilos;
use App\Question;
use App\Question_choice;
use App\Question_ilos;
use App\Staff;
use App\Student_cource_exam;
use Illuminate\Http\Request;

class DoctorProfileContoller extends Controller
{
    public function index()
    {
        $exams = Exam::where('STAFF_ID', auth()->user()->staff->id)->get();
        return view('doctor.index', compact('exams'));
    }

    public function createExam()
    {
        $faculites = Faculty::all();
        $staffs = Staff::all();
        return view('doctor.createExam', compact('faculites', 'staffs'));
    }

    public function storeExam(Request $request)
    {
        $exam = new Exam();
        $exam->EXAM_NAME = $request->name;
        $exam->type = $request->type;
        $exam->EXAM_TOTAL = $request->point;
        $exam->time = $request->start_time;
        $exam->date = $request->date;
        $exam->EXAM_DURATION = $request->time;
        $exam->COURSE_ID = $request->course_id;
        $exam->STAFF_ID = auth()->user()->staff->id;


        $exam->save();
        ///update all student records
        $Student_cource_exams=Student_cource_exam::where('COURSE_ID',$request->course_id)->whereNull('EXAM_ID')->get();
//        dd($Student_cource_exams,$request->course_id);
        foreach ($Student_cource_exams as $kk)
        {
            $kk->EXAM_ID=$exam->id;
            $kk->save();
        }
        return redirect()->route('doctorProfile.index');

    }

    public function createQuestion(Exam $exam)
    {
        $questions_lists=Question::where('EXAM_ID',$exam->id)->get();
        $ilos = Ilos::where('COURSE_ID', $exam->COURSE_ID)->get();

        return view('doctor.createQuestion', compact('exam', 'ilos','questions_lists'));

    }

    public function storeQuestion(Request $request)
    {
//        dd($request->all());

//        `QUESTION_TEXT`, `QUESTION_TYPE_ID`, `EXAM_ID`, `POINTS`
        $question = new Question();
        $question->QUESTION_TYPE_ID = $request->question_type;
        $question->EXAM_ID = $request->exam_id;
        $question->POINTS = $request->point;

        if ($request->question_type == 1) {
            $question->QUESTION_TEXT = $request->name1;
            $question->save();
//            `QUESTION_ID`, `QUESTION_CHOICE_TEXT`, `QUESTION_CHOICE_ISCORRECT`
            $question_choice = new Question_choice();
            $question_choice->QUESTION_ID = $question->id;
            $question_choice->QUESTION_CHOICE_TEXT = $request->choose_text[0];
            $question_choice->QUESTION_CHOICE_ISCORRECT = $request->choose_answer_1;
            $question_choice->save();

            $question_choice = new Question_choice();
            $question_choice->QUESTION_ID = $question->id;
            $question_choice->QUESTION_CHOICE_TEXT = $request->choose_text[1];
            $question_choice->QUESTION_CHOICE_ISCORRECT = $request->choose_answer_2;
            $question_choice->save();

            $question_choice = new Question_choice();
            $question_choice->QUESTION_ID = $question->id;
            $question_choice->QUESTION_CHOICE_TEXT = $request->choose_text[2];
            $question_choice->QUESTION_CHOICE_ISCORRECT = $request->choose_answer_3;
            $question_choice->save();

            $question_choice = new Question_choice();
            $question_choice->QUESTION_ID = $question->id;
            $question_choice->QUESTION_CHOICE_TEXT = $request->choose_text[3];
            $question_choice->QUESTION_CHOICE_ISCORRECT = $request->choose_answer_4;
            $question_choice->save();

        }
        if ($request->question_type == 2) {
            $question->QUESTION_TEXT = $request->name2;
            $question->save();
//            `QUESTION_ID`, `QUESTION_CHOICE_TEXT`, `QUESTION_CHOICE_ISCORRECT`
            $question_choice = new Question_choice();
            $question_choice->QUESTION_ID = $question->id;
            $question_choice->QUESTION_CHOICE_TEXT = 'True';
            $question_choice->QUESTION_CHOICE_ISCORRECT = $request->choose_true;
            $question_choice->save();

            $question_choice = new Question_choice();
            $question_choice->QUESTION_ID = $question->id;
            $question_choice->QUESTION_CHOICE_TEXT = 'False';
            $question_choice->QUESTION_CHOICE_ISCORRECT = $request->choose_false;
            $question_choice->save();

        }
        if ($request->question_type == 3) {
            $question->QUESTION_TEXT = $request->name3;
            $question->save();

            $question_choice = new Question_choice();
            $question_choice->QUESTION_ID = $question->id;
            $question_choice->QUESTION_CHOICE_TEXT = $request->complete_1;
            $question_choice->save();

            $question_choice = new Question_choice();
            $question_choice->QUESTION_ID = $question->id;
            $question_choice->QUESTION_CHOICE_TEXT = $request->complete_2;
            $question_choice->save();

        }
        if ($request->question_type == 4) {
            $question->QUESTION_TEXT = $request->name3;
            $question->save();
        }
        if ($request->question_type == 5) {
            $question->QUESTION_TEXT = $request->name3;
            $question->save();
        }


        foreach ($request->ilos as $ilo) {
            $i = new Question_ilos();
            $i->QUESTION_ID = $question->id;
            $i->ILO_ID = $ilo;
            $i->save();

        }
        return back();
        //$ilos=Ilos::where('COURSE_ID',$exam->COURSE_ID)->get();

        // return view('doctor.createQuestion',compact('exam','ilos'));

    }

    public function deleteQuestion(Question $question)
    {
        //delete all question here

    }
    public function showExamResult()
    {
        $exams=Exam::where('STAFF_ID',auth()->user()->staff->id)->get();
//        dd($exams);
        return view('doctor.showExams',compact('exams'));
    }
    public function showExamResultDetial(Request $request)
    {
        $student_cource_exam=Student_cource_exam::where('EXAM_ID',$request->id)->get();
        $str='<table class="table table-responsive table-bordered table-striped"><tr>
                 <th>Student</th>
                 <th>Course</th>
                 <th>Total</th>
                </tr>';
        foreach ($student_cource_exam as $s)
        {
            $str.='<tr>
                    <th>'.$s->student->STUDENT_NAME.'</th>
                    <th>'.$s->course->COURSE_NAME.'</th>
                    <th>'.$s->Total_Student_Score.'</th>
                </tr>';
        }

        $str.='</table>';
        return $str;
    }

}
