<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function login(Request $request)
    {
        // return "login function call";
        // return $request->input('user');
         $request->session()->put('user',$request->input('user'));

         return redirect('profile');
    }

    function logout(){
        session()->pull('user');
         return redirect('profile');
    }
}
