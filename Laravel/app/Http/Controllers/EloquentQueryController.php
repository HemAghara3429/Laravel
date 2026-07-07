<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EloquentQueryController extends Controller
{

    function getalldata()
    {
        $response = User::all();
        return view('EloquentQueryView',['results'=>$response]);
    }


    function conditionquery(){
        $response=User::where('password','Da@111107')->get();

       return view('EloquentQueryView',['results'=>$response]);
    }


    function insertquery(){
          $response=User::insert([
            'name'=>'hemu bhai',
            'email'=>'hemu@gmail.com',
            'password'=>'123456',
          ]);

          if($response){
            return  "Data Add Successfully";
          }else{
            return "Data Not Add Successfully";
          }
    }



    function updatequery(){
         $response=User::where('password','Da@111107')->update(['name'=>'patelbhai']);

          if($response){
            return  "Data update Successfully";
          }else{
            return "Data Not update Successfully";
          }
    }
}
