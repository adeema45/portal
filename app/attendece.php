<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendece extends Model
{
    public function students()
    {
    	return $this->belongsTo(student::class , 'student_id');
    }
}
