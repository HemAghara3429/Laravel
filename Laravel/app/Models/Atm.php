<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atm extends Model
{
    protected $fillable = [ 'account_holder', 'balance', ];
}
