<?php

use Illuminate\Support\Facades\Route;

// first import controllers 
use App\Http\Controllers\UserController;

// next make sure routes are there for single single function first we have to give controller name then 
// function name in string type 
Route::get('/user/{rollnumber}', [UserController::class, 'getUser']);
Route::get('/admin', [UserController::class, 'getAdmin']);
Route::get('/admin/{name}', [UserController::class, 'getAdminwithparams']);
Route::get('/adminLogin',[UserController::class,'adminLogin']);


Route::get('/ss', function () {
    return view('ss');
});

// passing values as params and then passsing them as parameters
Route::get("/home/{name}",function($name)
{
    return view('home',['name' => $name]);
});

//redirect  when user hit / this then he will redirect to ss page 
Route::redirect('/','/ss');


Route::get('/welcome', function () {
    return view('welcome');
});
//or 
Route::view('/welcome','welcome');
// this is the way of creating controllers  

//php artisan make::controller UserController