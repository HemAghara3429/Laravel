<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class DatabaseTableViewController extends Controller
{
    function getStudent(){
      $student = Student::all();

         return view('DatabaseTableViewGetData',['students'=>$student]);
    }
}
