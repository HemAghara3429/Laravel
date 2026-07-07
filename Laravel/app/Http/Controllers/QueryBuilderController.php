<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
    function getinformation()
    {
        $result = DB::table('users')->get();

        return view('QueryBuilderView', ['results' => $result]);
    }


    function conditioninformation()
    {
        $result = DB::table('users')->where('name', 'prince')->get();
        return view('QueryBuilderView', ['results' => $result]);
    }

    function insertquery()
    {
        $result = DB::table('users')->insert([

            'name' => 'hem patel',
            'email' => 'patel@gmail.com',
            'password'=>'123456'
        ]);

        if($result){
            return "Insert the data successfully";
        }else{
            return "Data not add successfully";
        }
    }

    function udatequery(){
        $result=DB::table('users')->where('name','prince')->update(['password'=>'2222222']);
        if($result){
            return "Student Update Successfully";
        }else{
            return "Student Not Update";
        }
    }


    function deletequery(){
        $result=DB::table('users')->where('name','prince')->delete();

        if($result){
            return "data delete";
        }else{
            return "data not delete";
        }
    }
}
