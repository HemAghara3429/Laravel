<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PersonController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:persons,email',
            'phone' => 'required|digits:10',
            'address' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required|date',
            'password' => 'required|min:6',
        ]);

        Person::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'password' => Hash::make($request->password),
        ]);

        return "Person Registered Successfully";
    }
}
