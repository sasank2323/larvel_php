<?php

use Illuminate\Support\Facades\Route;

// first import controllers 
use App\Http\Controllers\Submit_form;
use App\Http\Controllers\UserController;
use App\Http\Controllers\form2submit;
use App\Http\Controllers\bigurlcontroller;
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

Route::view('/form','form');


Route::post('/adduser',[Submit_form::class,'adduser']);
// this is the way of creating controllers  

//php artisan make::controller 


// now we are creating a new view page with form check box ,
//radio button ,range drop down and submit to controller 

Route::view('/form2','secondform');

Route::post('/adduser2',[form2submit::class,'form2submitdata']);
// this is the way of creating controllers 
//php artisan make::controller form2submit here /adduser2 is route and method name is form2submitdata

Route::get('/bigurl',[bigurlcontroller::class,'showbigurl']);

Route::view('/bigurl/bigger','bigurl')->name('hm');