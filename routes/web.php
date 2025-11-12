<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use App\Http\Controllers\students;

Route::get("/getstudents",[students::class,'getstudents']);

Route::get("/getdatafromapi",[students::class,'get_data_from_api']);

Route::get("/users",[users::class,'show']);

