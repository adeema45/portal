<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class book extends Model
{
    use SoftDeletes;

    Protected $fillable = ['title','author','edition','sno'];
}
