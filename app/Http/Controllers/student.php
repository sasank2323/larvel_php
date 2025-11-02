<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class student extends Controller
{
    //
    function showstudentview()
    {
        return view('studentview', ['name' => 'rahul']);
    }

    function addstudent()
    {
        return redirect('/student/studentview',['name'=>'sasank']);
    }
}



