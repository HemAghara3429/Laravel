<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\SubviewController;
use App\Http\Controllers\MessageBanner;
use App\Http\Controllers\FormController;

Route::get('/',function(){
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

//directly return the view page without controller.about page open.
Route::view('/about','About');

Route::get('/user/{name}',function($name){
    return view('user', ['name' => $name]);
});


//userController. (understand the controller and route file).
Route::get('/user',[UserController::class,'getUser']);
Route::get('/aboutuser',[UserController::class,'aboutUser']);
Route::get('/user/{name}',[UserController::class,'getName']);
Route::get('/userview',[UserController::class,'getUserView']);
Route::get('/user/xyz/{name}',[UserController::class,'getparameter']);
Route::get('/admin',[UserController::class,'getAdminLogin']);
Route::get('/checkview',[UserController::class,'checkview']);


//BladeController (understand the Blade template engine and route file).

Route::get('/expression',[BladeController::class,'expression']);
Route::get('getname/{name}',[BladeController::class,'getname']);
Route::get('/printarray',[BladeController::class,'printarray']);

// subview controller (here subview include in the mainview page and route file)

Route::get('/mainview',[SubviewController::class,'mainview']);

//MessageBanner Component (here make one component that include inside the message-banner page )

Route::get('/message-banner',[MessageBanner::class,'messageshow']);


//Form Controller Route:here fill the form in view file that data handle by Laravel.
Route::get('/form',[FormController::class,'submitform']);
Route::post('/form',[FormController::class,'getuserdetalis']);

