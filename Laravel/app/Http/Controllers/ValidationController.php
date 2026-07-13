<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    function create()
    {
        return view('Validationview');
    }

    function store(Request $request)
    {

        $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|email',
            'course' => 'required'
        ]);
        return "Student Saved Successfully";
    }
}
