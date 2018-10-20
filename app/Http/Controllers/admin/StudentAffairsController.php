<?php

namespace App\Http\Controllers\admin;

use App\Faculty;
use App\Sa;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentAffairsRequest;

class StudentAffairsController extends Controller
{
    public function index()
    {
        $faculites = Faculty::all();
        $sas = Sa::all();
        return view('admin.studentAffairs.index', compact('faculites', 'sas'));
    }

    public function store(StudentAffairsRequest $request)
    {
//        dd($request->all());
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = 3;
        $user->password = bcrypt($request->password);
        $user->save();
        $sa = new Sa();
        $sa->SA_NAME = $request->name;
        $sa->SA_PHONE_NUMBER = $request->code;
        $sa->SA_FACULTY_ID = $request->collage;
        $sa->SA_PASSWORD = bcrypt($request->password);
        $sa->user_id = $user->id;
        $sa->save();
        return redirect()->route('studentAffairs.index');
    }//end of store

    public function update(StudentAffairsRequest $request, Sa $sa)
    {
        $user=$sa->user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = 3;
        $user->password = bcrypt($request->password);
        $user->save();

        $sa->SA_NAME = $request->name;
        $sa->SA_PHONE_NUMBER = $request->code;
        $sa->SA_FACULTY_ID = $request->collage;
        $sa->SA_PASSWORD = bcrypt($request->password);
        $sa->user_id = $user->id;
        $sa->save();

        return redirect()->route('studentAffairs.index');

    }
    public function destroy(Sa $sa)
    {
        $sa->delete();
        return redirect()->route('studentAffairs.index');

    }//end of destroy
}
