<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class GetDataController extends Controller
{

    function list(Request $request)
    {
        $studentData=Student::all();
        return view('studentlist',['student'=>$studentData]);
    }

    function delete($id){
       $isDeleted=Student::destroy($id);
       if($isDeleted){
        return "Student Delete Successfully";
       }else{
        return "Student Are not Delete";
       }
    }
}
