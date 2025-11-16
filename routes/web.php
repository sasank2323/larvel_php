<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use App\Http\Controllers\students;
use App\Http\Controllers\checksession;

Route::get("/getstudents",[students::class,'getstudents']);

Route::get("/getdatafromapi",[students::class,'get_data_from_api']);


Route::get("/users",[users::class,'show']);

Route::post("/adduser",[users::class,'adduser']);
//put and patch both are used to update data all data we use put and some data we use patch
Route::patch("/edituser",[users::class,'edituser']);

Route::put("/updateuser",[users::class,'updateuser']);

Route::delete("/deleteuser",[users::class,'deleteuser']);

Route::view('/usersop', 'allpostgetupdatedelete');

// this means it will hit when two methods get and post are used both will call same function 
Route::match(['get','post'],'/twomethods',[users::class,'twomethods']);



//session 

Route::view('/sessionview','sessionview');

Route::get('/checksession',[checksession::class,'checksessiondata']);

Route::get('/logout',[users::class,'logout']);


Route::view('/lan','language');


//setting a specific language 
Route::get('/about{lang}',function($lang){
    APP::setlocale($lang);
    return view('about');
});
