<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Databasecontroller extends Controller
{
    function databaseoperation(){
     $users= DB::select('select * from users');
     return view('databasetableview',['users'=>$users]);
    }
}
