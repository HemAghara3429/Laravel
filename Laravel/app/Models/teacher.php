<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    protected $fillable = [
        'name',
        'email'
    ];

    // One Teacher has many Subjects
    public function subjects()
    {
        return $this->hasMany(subject::class);
    }
}
