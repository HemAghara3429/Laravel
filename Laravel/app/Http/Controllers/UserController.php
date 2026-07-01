<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function getUser(){
        return "Hem Aghara";
    }

    function aboutUser(){
        return "I am a Laravel Developer";
    }

    function getName($name){
        return "this is my name::".$name;
    }

    //controller return the view page .that view page open.
    //view page open from the controller.
    function getUserView(){
        return view('getuserview');
    }

    //function pass as parameter to the view page.
    function getparameter($name){
        return view('getparameter',['name'=>$name]);
    }

    //subfolder view page open  from the controller.

    function getAdminLogin(){
        return view('admin.adminlogin');
    }

    //check the view page is exist or not.

    function checkview(){

    if(View::exists('getuserview')){
        return view('getuserview');
    }
    else{
        return "view page not found";
    }
}

}
