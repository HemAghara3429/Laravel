<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class OneToManyRelationshipController extends Controller
{
   public function index()
    {
        $teachers = teacher::with('subjects')->get();

        return view('teacher', compact('teachers'));
    }
}
