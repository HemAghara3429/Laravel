<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageBanner extends Controller
{
    function messageshow(){
        return view('component');
    }
}
