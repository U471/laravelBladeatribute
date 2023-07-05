<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get("user",[userController::class,'loadView']);
// Route::view("user","login");
Route::view('profile','profile');
Route::get('/user', function () {
    if(session()->has('username')){
       return redirect('profile');
    }
    return view('login');
});
Route::get('/logout',function(){
     if(session()->has('username')){
         session()->pull('username',null);
     }
     return redirect('user');
});
// Route::view("home","home")->middleware('protected');
Route::view("about","about");
Route::view("noaccess","noaccess");
// Route::view()
Route::post("login",[userController::class,'login']);
// Route::get("admin",[userController::class,'index']);
// Route::get("admin",[userController::class,'getdata']);
// Route::group(['middleware'=>['checkAge']],function(){
Route::view("home","home");
// Route::get('/', function () {
//     return view('welcome');
// });
// });

//lecher 21 start rout ======================
// Route::view('profile','profile2');
Route::get('/profile/{lang}',function($lang){
   App::setlocale($lang);
   return view('profile2');
});

// ===============================================
//lecher 22 add data database 
Route::view('addData','addmember');
Route::put('admin',[admincontroler::class,'addData']);
Route::get('list',[userController::class,'getdata']);
Route::get('delete/{id}',[userController::class,'delete']);
Route::POST('/edit',[userController::class,'update']);
Route::get('update/{id}',[userController::class,'showdata']);




