<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashSessionController extends Controller
{
    public function adduser(Request $request)
    {
        // Store flash data
        $request->session()->flash('success', 'User added successfully!');
        $request->session()->flash('username', $request->name);

        return redirect('/flashsession');
    }
}
