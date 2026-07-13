<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class OneToOneRelationshipController extends Controller
{
    public function index()
    {
        //employee model call the profile method.
        //with():Laravel runs only 2 queries.
        //get :here employee all information get with profile information........
        $employees = employee::with('profile')->get();

        return view('employee', compact('employees'));
    }
}
