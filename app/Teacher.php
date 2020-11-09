<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function sections()
 	  {
   		return $this->belongsTo(Section::class);
   	  }
}
