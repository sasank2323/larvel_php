<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;

Route::get("/users",[users::class,'show']);

