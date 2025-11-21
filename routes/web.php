<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use App\Http\Controllers\students;
use App\Http\Controllers\checksession;
use App\Http\Controllers\Testing;

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


//setting a specific language here we are setting manually the language settings so 
//after this we can use middle wears to do the same 
// Route::get('/about{lang}',function($lang){
//     APP::setlocale($lang);
//     return view('about');
// });

// Route::get('/setlang{lang}',function($lang){
//     Session::put('lang',$lang);
//     return lang;
// });

Route::middleware(['Language'])->group(function(){
   Route::get('/about/{lang}',function($lang){
        Session::put('lang',$lang);
        return redirect('/lang');
    });
    Route::get('/lang',function(){
        return view('Language');
    });
});



Route::view('/first','firstpage');
Route::view('/second','secondpage');


Route::view('/firstextend','firstextend');
Route::view('/secondextend','secondextend');

//Route::get("/showstudent",[Students::class,show]);

Route::get('/showstudent', [Students::class, 'show']);


Route::get('/save',[Students::class,'save']);



// table relation ships 

Route::get("/onetoonelist",[Testing::class,'list']);
Route::get("/many",[Testing::class,'many']);