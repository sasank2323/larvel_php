<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use App\Http\Controllers\students;

Route::get("/getstudents",[students::class,'getstudents']);

