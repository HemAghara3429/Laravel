<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class ManyToManyRelationshipController extends Controller
{
    public function index()
    {
        $players = Player::with('games')->get();

        return view('manytomany', compact('players'));
    }
}
