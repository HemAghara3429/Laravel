<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\SubviewController;
use App\Http\Controllers\MessageBanner;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\prefix;
use App\Http\Middleware\NumberCheck;
use App\Http\Middleware\CountryCheck;
use App\Http\Controllers\Databasecontroller;
use App\Http\Controllers\DatabaseTableViewController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\QueryBuilderController;
use App\Http\Controllers\EloquentQueryController;
use App\Http\Controllers\FlashSessionController;
use App\Http\Controllers\GetDataController;
use App\Http\Controllers\RouteMethodController;
use App\Http\Controllers\HttpRequestController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\InsertDataController;
use App\Http\Controllers\pagination;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SearchController;
Use App\Http\Controllers\SessionController;
use App\Http\Controllers\SortingController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ValidationController;

Route::get('/',function(){
    return view('welcome');
});

Route::view('/middleware','middleware.middleware');

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

//Student Controller Route:here fill the form in view file that data handle by Laravel. (custom validation rule that check the input value is uppercase or not.)
Route::get('/student',[StudentController::class,'submitform']);
Route::post('/student',[StudentController::class,'getstudentdetails']);

//Url generation :here generate the url by route name and route parameter..

Route::view('/url/urlgeneration','url.urlgeneration');

//Name route:here short name route and generate the url by route name and route parameter.

Route::view('/name/nameroute','nameroutes.namedroutes')->name('about');

//prefix route:
//controller prefix  route
route::prefix('student')->group(function () {
    Route::get('/add', [prefix::class, 'addStudent']);
    Route::get('/list', [prefix::class, 'listStudent']);
});

//middleware route: group of the middleware apply

Route::middleware('Middlewaregroup')->group(function(){
Route::view('/home-as', 'welcome');
Route::view('/about-as', 'About');
});


//direct apply the middleware to the route this middleware are not define inside the bootstrap....
Route::view('/directmiddleware','directmiddleware')->middleware(NumberCheck::class,CountryCheck::class);


//database route example.


Route::get('/database',[Databasecontroller::class,'databaseoperation']);


//database table view example.

Route::get('/showdata',[DatabaseTableViewController::class,'getStudent']);


//Api call Example...

Route::get('/getdata',[ApiController::class,'getUser']);


//query builder route example .....
Route::get('/querybuilder',[QueryBuilderController::class,'getinformation']);
Route::get('/querycondition',[QueryBuilderController::class,'conditioninformation']);
Route::get('insertquery',[QueryBuilderController::class,'insertquery']);
Route::get('/queryupdate',[QueryBuilderController::class,'udatequery']);
Route::get('/querydelete',[QueryBuilderController::class,'deletequery']);

//eloquent query builder route example ......

Route::get('/getalldata',[EloquentQueryController::class,'getalldata']);
Route::get('/conditionquery',[EloquentQueryController::class,'conditionquery']);
Route::get('/insertquery',[EloquentQueryController::class,'insertquery']);
Route::get('/updatequery',[EloquentQueryController::class,'updatequery']);


//diffrent type of route.
Route::get('/getalldata', [RouteMethodController::class, 'getalldata']);
Route::post('/postdata', [RouteMethodController::class, 'postdata']);
Route::match(['post','get'],'/getorpost',[RouteMethodController::class,'group']);
Route::view('/formview', 'RouteMethodView');

//http request class example....
Route::view('/httpclassexample', 'HttpRequestView');

Route::post('/httpclassexample', [HttpRequestController::class, 'getData']);

//session example route

Route::post('/login',[SessionController::class,'login']);
Route::post('/logout',[SessionController::class,'logout']);
Route::view('/login','login');
Route::view('/profile','profile');


//Flash session example of route.
Route::view('/upload', 'uploadfile');
Route::post('/upload-file', [UploadController::class, 'upload']);

//Language translate.....

Route::view('/language','LanguageView');

// Add Student
Route::view('/add', 'addstudentview');
Route::post('/add-data', [InsertDataController::class, 'insert']);

// Display Student List
Route::get('/getstudent/list', [GetDataController::class, 'list']);

// Delete Single Student
Route::get('/getstudent/delete/{id}', [GetDataController::class, 'delete']);

// Edit Student
Route::get('/getstudent/edit/{id}', [GetDataController::class, 'edit']);

// Update Student
Route::put('/getstudent/update/{id}', [GetDataController::class, 'update']);

// Search Student
Route::get('/search', [GetDataController::class, 'search']);

// Pagination
Route::get('/pagination', [GetDataController::class, 'pagination']);

// Multiple Delete
Route::post('/getstudent/multiple-delete', [GetDataController::class, 'multipleDelete']);
Route::get('/getstudent/multiple-delete', function () {
    return redirect('/getstudent/list');
});


//upload file route.
Route::view('/upload', 'upload');

Route::post('/upload', [ImageController::class, 'upload']);

Route::get('/listphoto', [ImageController::class, 'listimage']);

//layoutview route example.

Route::view('/layoutview','layoutView');

//css and js example.
Route::view('/css-js', 'cssandjsview');

//validation form route example

Route::get('/student/form',[ValidationController::class,'create']);
Route::post('/student/save',[ValidationController::class,'store']);

//resource routing

// Route::resource('student',ResourceController::class);


//pagination route example.
Route::get('paginationdata',[pagination::class,'index']);

//search functionality route example....


Route::get('/search', [SearchController::class, 'search']);

//Sorting functionality example .

Route::get('/sorting',[SortingController::class,'sorting']);
