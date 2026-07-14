<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{ protected $table = 'persons';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'gender',
        'date_of_birth',
        'password',
    ];
}
