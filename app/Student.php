<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function department()
    {
        return $this->belongsTo('App\Department', 'DEPARTMENT_ID');
    }
    public function faculty()
    {
        return $this->belongsTo('App\Faculty', 'FACULTY_ID');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
