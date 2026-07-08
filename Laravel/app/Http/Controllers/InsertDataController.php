<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class InsertDataController extends Controller
{
    function insert(Request $request){
        $student=new Student();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->batch=$request->batch;
        $student->save();

        if($student){
            return "Student Add Done";
        }else{
            return "Student are not insert inside the database...........";
        }

    }
}
