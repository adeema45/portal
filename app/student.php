<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public function attendence()
    {
    	return $this->hasMany(attendece::class , 'student_id');
    }
}
