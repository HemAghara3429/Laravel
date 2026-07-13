<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class pagination extends Controller
{
   function index(){


   $student=Student::paginate(5);

        return view('studentsdata', ['data' => $student]);

   }
}
