<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Faculty;
class FaclitiesController extends Controller
{
  public function index(){
      $faculties=Faculty::all();
      return view('admin.faculities.index',compact('faculties'));
  }
  public function store(Request $request)
	{
		$faculty = new Faculty();
		$faculty->FACULTY_NAME = $request->name;
		$faculty->save();
		return redirect()->route('faclities.index');
	}//end of store
}
