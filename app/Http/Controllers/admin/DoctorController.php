<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Faculty;
use App\Staff;
use App\User;
use App\Staff_course;
class DoctorController extends Controller
{
  public function index(){
      $faculites=Faculty::all();
      $staffs=Staff::all();
      return view('admin.doctor.index',compact('faculites','staffs'));
  }
  public function store(Request $request)
  {

      $user=new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->role=3;
      $user->password=bcrypt($request->password);
      $user->save();
      $doctor = new Staff();
      $doctor->STAFF_NAME = $request->name;
      $doctor->phone=$request->code;
      $doctor->FACULTY_ID=$request->college_id;
      $doctor->DEPARTMENT_ID=$request->depart;
      $doctor->user_id=$user->id;
      $doctor->save();
      $cou_doc=new Staff_course();
      $cou_doc->STAFF_ID=$doctor->id;
      $cou_doc->COURSE_ID=$request->course;
    //  $cou_doc->save();
      return redirect()->route('doctor.index');
  }//end of store
  public function destroy(Staff $doctor)
  {
      $doctor->delete();
      return redirect()->route('doctor.index');

  }//end of destroy
}
