<?php

namespace App\Http\Controllers\admin;

use App\Course;
use App\Department;
use App\Faculty;
use App\Ilo_type;
use App\Ilos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IlosController extends Controller
{
    public function index(){
        $ilos=Ilos::all();
        $ilos_types=Ilo_type::all();
        $faculties=Faculty::all();
        return view('admin.ilos.index',compact('faculties','ilos','ilos_types',''));
    }

    public function store(Request $request)
    {
        $iols = new Ilos();
        $iols->COURSE_ID = $request->course_id;
        $iols->ILO_TEXT = $request->ilos_name;
        $iols->ILO_TYPE_ID = $request->type_id;
        $iols->save();
        return redirect()->route('ilos.index');
    }//end of store
    public function update(Request $request,Ilos $ilos)
    {
        $ilos->ILO_TEXT = $request->ilos_name;
        $ilos->ILO_TYPE_ID = $request->type_id;
        $ilos->save();
        return redirect()->route('ilos.index');

    }//end of update
    public function destroy(Ilos $ilos)
    {

        $ilos->delete();
        return redirect()->route('ilos.index');

    }//end of destroy
    public function courses(Request $request)
    {
        $faculty_id=$request->faculty_id;
        $departments=Department::where('FACULTY_ID',$faculty_id)->get()->pluck('id')->toArray();
        $courses=Course::whereIn('DEPARTMENT_ID',$departments)->get();
        $data='';

        foreach ($courses as $course)
        {
            $data.='<option ';
//            if($depart_select ==$department->id)
//                $data.= ' selected';
            $data.= ' value="'.$course->id.'">'.$course->COURSE_NAME.'</option>';
        }
        return $data;

    }
}
