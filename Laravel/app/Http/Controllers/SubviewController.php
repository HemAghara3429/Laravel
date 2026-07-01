<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubviewController extends Controller
{
    function mainview(){
        return view('mainview');
    }
}
