<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{


    protected $fillable = [
        'employee_id',
        'phone',
        'address'
    ];

//belongsTo:This record belongs to one record of another table
    public function employee()
    {
        return  $this->belongsTo(employee::class);
    }
}
