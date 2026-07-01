<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    function expression(){
        return view('blade.expression');
    }

    function getname($name){
        return view('blade.getname',['name'=>$name]);
    }

    function printarray(){
        $users=["hem","ram","shyam"];
        $name="hem";
        return view('blade.printarray',['name'=>$name,'users'=>$users]);
    }
}
