<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
class City extends Model
{
    protected $fillable = [
         'name',
         'state'
    ];

    protected function name():Attribute{
        return Attribute::make(
        //Accessor
        get:fn($value)=>ucfirst($value),

        //mutator

        set:fn($value)=>strtolower($value)
        );
    }
}
