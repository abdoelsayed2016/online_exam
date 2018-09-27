<?php

namespace App\Http\Controllers\admin;

use App\Department;
use App\Faculty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentsController extends Controller
{
    public function index(){
        $departments=Department::all();
        $faculites=Faculty::all();
        return view('admin.departments.index',compact('departments','faculites'));
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
}
