<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpRequestController extends Controller
{
    public function getData(Request $request)
{
    echo "Form Submitted Successfully";
    echo "<br>";

    echo "Request Method: " . $request->method();
    echo "<br>";

    echo "Request Path: " . $request->path();
    echo "<br>";

    echo "Request URL: " . $request->url();
    echo "<br>";
}
}
