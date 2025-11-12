<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use App\Http\Controllers\students;

Route::get("/getstudents",[students::class,'getstudents']);

Route::get("/getdatafromapi",[students::class,'get_data_from_api']);


Route::get("/users",[users::class,'show']);

Route::post("/adduser",[users::class,'adduser']);
//put and patch both are used to update data all data we use put and some data we use patch
Route::patch("/edituser",[users::class,'edituser']);

Route::put("/updateuser",[users::class,'updateuser']);

Route::delete("/deleteuser",[users::class,'deleteuser']);

Route::view('/', 'welcome');

