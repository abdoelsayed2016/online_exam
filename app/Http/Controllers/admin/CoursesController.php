<?php

namespace App\Http\Controllers\admin;

use App\Course;
use App\Faculty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    public function index(){
        $courses=Course::all();
        $facultites=Faculty::all();
        return view('admin.courses.index',compact('courses','facultites'));
    }
    public function store(Request $request)
    {
        $image = $request->file('file');
        $name = time().'_'.md5($image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/courses');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);

        $course = new Course();
        $course->COURSE_NAME = $request->name;
        $course->COURSES_LEVEL=$request->level;
        $course->DEPARTMENT_ID=$request->department;
        $course->COURSE_CODE=$request->code;
        $course->COURSE_IMAGE=$name;
        $course->save();
//        dd($course);
        return redirect()->route('courses.index');
    }//end of store
    public function update(Request $request, Course $course)
    {
        dd($request->all(),$_FILES);
        $image = $request->file('file');
        $name = time().'_'.md5($image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/courses');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);

        $course->COURSE_NAME = $request->name;
        $course->COURSES_LEVEL=$request->level;
        $course->DEPARTMENT_ID=$request->department;
        $course->COURSE_CODE=$request->code;
        $course->COURSE_IMAGE=$name;
        $course->save();
        return redirect()->route('courses.index');

    }//end of update
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index');

    }//end of destroy

}
