<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class SortingController extends Controller
{
    function Sorting(){
        $students=Student::orderBy('name','asc')->get(); //name is ascending order......
        return view('sorting',compact('students'));
    }
}
