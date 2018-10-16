<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stud_ques_ans_choice extends Model
{
    public function question()
    {
        return $this->belongsTo('App\Question','question_id');
    }
}
