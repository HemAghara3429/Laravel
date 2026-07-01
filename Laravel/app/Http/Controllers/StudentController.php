<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function submitform()
    {
        return view('student.student-form');

    }

    public function getstudentdetails(Request $request)
    {
        //validate the form data here filed are required and if not filled then show the error message.

        $validated = $request->validate([
            'studentname' => 'required|min:3|max:20|uppercase', //requied and minimum 3 character and maximum 20 character. uppercase is custome validation rule that check the input value is uppercase or not.
            'studentemail' => 'required|email', //required and valid email format.
            'studentcity' => 'required', //required

        ],[
            //custom error message for username field.
            'studentname.required'=>'Please enter your name',
            'studentname.min'=>'Name must be at least 3 characters',
            'studentname.max'=>'Name must not exceed 20 characters',
            'studentemail.required'=>'Please enter your email',
            'studentemail.email'=>'Please enter a valid email address',
            'studentcity.required'=>'Please enter your city',

        ]);

        $studentname = $request->input('studentname');
        $studentemail = $request->input('studentemail');
        $studentcity = $request->input('studentcity');

}

}


