<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class multiple extends Model
{
    	public $timestamps = true;
		protected $fillable = ['id','name','fname', 'address','age'];
}
