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
