<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
  public function courses()
 {
     return $this->belongsToMany('App\Course');
 }
 public function department()
 {
     return $this->belongsTo('App\Department','DEPARTMENT_ID');
 }
}
