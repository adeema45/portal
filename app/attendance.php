<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    public function students(){
    return $this->belongsto(student::class,'student_id');
    }

    public function iclass(){
    return $this->belongsto(IClass::class,'class_id');
    }

    public function isection(){
    return $this->belongsto(Section::class,'section_id');
    }
}
