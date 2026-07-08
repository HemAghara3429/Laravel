<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteMethodController extends Controller
{
    function getalldata(Request $request){
        return "gett all data";
    }

     public function postdata(Request $request)
    {
        return "Post Data";
    }


    public function group(Request $request){
        return "get or post data";
    }
}
