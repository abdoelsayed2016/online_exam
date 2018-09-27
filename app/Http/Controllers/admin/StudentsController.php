<?php

namespace App\Http\Controllers\admin;

use App\Department;
use App\Faculty;
use App\Student;
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
        $department = new Department();
        $department->DEPARTMENT_NAME = $request->name;
        $department->FACULTY_ID=$request->college_id;
        $department->save();
        return redirect()->route('departments.index');
    }//end of store
    public function update(Request $request, Department $department)
    {
        $department->DEPARTMENT_NAME = $request->name;
        $department->FACULTY_ID=$request->college_id;
        $department->save();
        return redirect()->route('departments.index');

    }//end of update
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('departments.index');

    }//end of destroy
    public function getDepartment(Request $request)
    {
        $departments=Department::where('FACULTY_ID',$request->id)->get();
        $data='';
        foreach ($departments as $department)
        {
            $data.='<option value="'.$department->id.'">'.$department->DEPARTMENT_NAME.'</option>';
        }
        return $data;
    }
}
