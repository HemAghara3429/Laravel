<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
     protected $fillable = [
        'name',
        'email'
    ];
    //employee have only one profile which is belong to profile model.
    //hasOne :One record in this table has exactly one related record in another table
    public function profile(){
        return $this->hasOne(profile::class);
    }
}
