<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
     protected $fillable = [
        'bank_name',
        'branch_name',
        'ifsc_code',
        'account_number',
        'account_holder_name',
        'balance',
    ];
}
