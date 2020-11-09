<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    Protected $fillable = ['title'];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtolower($value);
    }

public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }
    
}
