<?php

namespace App\Http\Controllers\admin;

use App\Department;
use App\Faculty;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{
//    bcrypt
    public function index(){
        $faculites=Faculty::all();
        $students=Student::all();
        return view('admin.students.index',compact('faculites','students'));
    }
    public function store(Request $request)
    {
//        dd($request->all());
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = 4;
        $user->password = bcrypt($request->password);
        $user->save();
        $student = new Student();
        $student->STUDENT_NAME = $request->name;
        $student->FACULTY_ID	 = $request->faculty;
        $student->DEPARTMENT_ID = $request->department;
        $student->STUDENT_SSN = $request->snn;
        $student->STUDENT_PASSWORD = bcrypt($request->password);
        $student->STUDENT_EMAIL=$request->email;
        $student->term=$request->term;
        $student->semester=$request->year;
        $student->phone=$request->phone;
        $student->user_id=$user->id;
        $student->save();
        return redirect()->route('students.index');
    }//end of store
    public function update(Request $request, Student $student)
    {
        $user = $student->user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = 4;
        $user->password = bcrypt($request->password);
        $user->save();
        $student->STUDENT_NAME = $request->name;
        $student->FACULTY_ID	 = $request->faculty;
        $student->DEPARTMENT_ID = $request->department;
        $student->STUDENT_SSN = $request->snn;
        $student->STUDENT_PASSWORD = bcrypt($request->password);
        $student->STUDENT_EMAIL=$request->email;
        $student->term=$request->term;
        $student->semester=$request->year;
        $student->phone=$request->phone;
        $student->user_id=$user->id;
        $student->save();
        return redirect()->route('students.index');

    }//end of update
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('departments.index');

    }//end of destroy
    public function getDepartment(Request $request)
    {
        $depart_select='';
        if($request->depart)
            $depart_select=$request->depart;
        $departments=Department::where('FACULTY_ID',$request->id)->get();
        $data='<option> select department</option>';

        foreach ($departments as $department)
        {
            $data.='<option ';
//            if($depart_select ==$department->id)
//                $data.= ' selected';
            $data.= ' value="'.$department->id.'">'.$department->DEPARTMENT_NAME.'</option>';
        }
        return $data;
    }
}
