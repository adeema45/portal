<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table extends Model
{
    // protected $table = 'table';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'name','class', 'subject',];
}
