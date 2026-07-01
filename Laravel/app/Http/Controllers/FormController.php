<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submitform()
    {
        return view('form.user-form');
    }

    public function getuserdetalis(Request $request)
    {
        //validate the form data here filed are required and if not filled then show the error message.

        $validated = $request->validate([
            'username' => 'required|min:3|max:20', //requied and minimum 3 character and maximum 20 character.
            'useremail' => 'required|email', //required and valid email format.
            'usercity' => 'required', //required
            'gender' => 'required', //required
            'hobbies' => 'required', //required
            'skill' => 'required|integer|min:0|max:100', //required, must be an integer between 0 and 100
            'course' => 'required', //required
        ],[
            //custom error message for username field.
            'username.required'=>'Please enter your name',
            'username.min'=>'Name must be at least 3 characters',
            'username.max'=>'Name must not exceed 20 characters',
            'useremail.required'=>'Please enter your email',
            'useremail.email'=>'Please enter a valid email address',
            'usercity.required'=>'Please enter your city',
            'gender.required'=>'Please select your gender',
            'hobbies.required'=>'Please select at least one hobby',
            'skill.required'=>'Please enter your skill level',
            'skill.integer'=>'Skill level must be an integer',
            'skill.min'=>'Skill level must be at least 0',
            'skill.max'=>'Skill level must not exceed 100',
            'course.required'=>'Please select a course',
        ]);

        $username = $request->input('username');
        $useremail = $request->input('useremail');
        $usercity = $request->input('usercity');
        $gender = $request->input('gender');
        $hobbies = $request->input('hobbies');
        $skill = $request->input('skill');
        $course = $request->input('course');

        $hobbiesOutput = is_array($hobbies) ? implode(', ', $hobbies) : $hobbies;

        return "User Name: $username <br> User Email: $useremail <br> User City: $usercity <br> Gender: $gender <br> Hobbies: $hobbiesOutput <br> Skill: $skill <br> Course: $course";
    }
}
