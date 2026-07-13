<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    protected $fillable = [
        'teacher_id',
        'subject_name'
    ];

    // Each Subject belongs to one Teacher
    public function teacher()
    {
        return $this->belongsTo(teacher::class);
    }
}
