<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser($rollnumber)
    {
        // calling a view page from controller 
        return view('ss',['rollnumber'=>$rollnumber]);
    }

    function getAdmin()
    {
        return "admin";
    }

    function getAdminwithparams($name)
    {
        return 'admin with params '.$name;
    }

}
