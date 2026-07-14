<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate User Input
        $request->validate(['email' => 'required|email', 'password' => 'required']);
        // Find Person by Email
        $person = Person::where('email', $request->email)->first();
        // Check Email and Password
        if ($person && Hash::check($request->password, $person->password)) {
            // Store User Information in Session
            session(['person_id' => $person->id, 'person_name' => $person->name]);
            return "Login Successful";
        }
        return "Invalid Email or Password";
    }

    public function logout(Request $request)
    {
        // Remove all session data
        $request->session()->flush();
        // Redirect to login page
        return redirect('/login');
    }


    public function resetPassword(Request $request)
    {
        // Validate Request
        $request->validate(['email' => 'required|email', 'password' => 'required|min:6|confirmed',]);
        // Find Person by Email
        $person = Person::where('email', $request->email)->first();
        // Check Email Exists
        if (!$person) {
            return "Email Not Found";
        }
        // Update Password
        $person->password = Hash::make($request->password);
        $person->save();
        return "Password Reset Successfully";
    }
}
