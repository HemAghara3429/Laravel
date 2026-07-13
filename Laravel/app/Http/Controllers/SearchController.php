<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->search;

        if($search != "")
        {
            $students = Student::where('name','like','%'.$search.'%')->get();
        }
        else
        {
            $students = Student::all();
        }

        return view('search', compact('students'));
    }
}
