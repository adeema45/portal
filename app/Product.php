<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','brand','cost'];

    //protected $guarded  = ['name'];
    // public function setNameAttribute($value)
    // {
    //     $this->attributes['name'] = strtolower($value);
    // }

    //  public function getNameAttribute($value)
    // {
    //     return ucfirst($value);
    // }

}
