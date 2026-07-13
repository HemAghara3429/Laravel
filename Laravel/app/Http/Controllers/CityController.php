<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function store(Request $request)
    {
        City::create([
            'name' => 'AHMEDABAD',
            'state' => 'GUJARAT'
        ]);

        return "City Saved";
    }

    public function index()
    {
        $cities = City::all();

        return view('city', compact('cities'));
    }
}
