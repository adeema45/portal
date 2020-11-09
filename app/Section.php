<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

   public function staff()
 	  {
   		return $this->belongsTo(Teacher::class, 'teacher_id');
   	  }
 }

