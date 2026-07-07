<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getUser()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');

        return view('Apiview', [
            'data' => json_decode($response->body())
        ]);
    }
}
