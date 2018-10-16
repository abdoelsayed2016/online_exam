<?php

namespace App\Http\Controllers\admin;

use App\Course;
use App\Department;
use App\Faculty;
use App\Http\Controllers\Controller;
use App\Student;
use App\Student_cource_exam;
use Illuminate\Http\Request;

class StudentCourseController extends Controller
{
    public function index()
    {
        $Student_cource_exams=Student_cource_exam::all();
        return view('admin.studentCourses.index', compact('Student_cource_exams'));

    }
    public function create()
    {
        $faculties = Faculty::all();
        return view('admin.studentCourses.create', compact('faculties'));
    }
    public function store(Request $request){
        foreach ($request->students as $student)
        {
            foreach ($request->courses as $course){
                    $Student_cource_exams=Student_cource_exam::where('STUDENT_ID',$student)->where('COURSE_ID',$course)->get();
                    if($Student_cource_exams->isEmpty())
                    {
                        $Student_cource_exam=new Student_cource_exam();
                        $Student_cource_exam->STUDENT_ID=$student;
                        $Student_cource_exam->COURSE_ID=$course;
                        $Student_cource_exam->save();
                    }

            }
        }
        return redirect()->route('studentCourses.index');

    }

    public function courses(Request $request)
    {
        $faculty_id = $request->faculty_id;
        $departments = Department::where('FACULTY_ID', $faculty_id)->get()->pluck('id')->toArray();
        $courses = Course::whereIn('DEPARTMENT_ID', $departments)->get();
        $data = '';

        foreach ($courses as $course) {
            $data .= '<div class="form-group">
                                    <div class="checkbox">
                                        <input id="remember-7" type="checkbox" value="' . $course->id . '" name="courses[]" class="individual">
                                        <label for="remember-7"> ' . $course->COURSE_NAME . ' </label>
                                    </div>
                                </div>';
        }
        return $data;

    }
    public function students(Request $request)
    {
        $faculty_id = $request->faculty_id;
        $students = Student::where('FACULTY_ID', $faculty_id)->get();
        $data = '';

        foreach ($students as $student) {
            $data .= '<div class="form-group">
                                    <div class="checkbox">
                                        <input id="remember-7" type="checkbox" value="' . $student->id . '" name="students[]" class="individual2">
                                        <label for="remember-7"> ' . $student->STUDENT_NAME . ' </label>
                                    </div>
                                </div>';
        }
        return $data;

    }
}
