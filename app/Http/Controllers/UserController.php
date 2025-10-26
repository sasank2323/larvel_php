<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser($rollnumber)
    {
        // calling a view page from controller 
        $user=["sasank","rahul","messy"];
        return view('ss',['rollnumber'=>$rollnumber,"user"=>$user]);
    }

    function getAdmin()
    {
        return "admin";
    }

    function getAdminwithparams($name)
    {
        return 'admin with params '.$name;
    }

    function adminLogin()
    {
        return view('admin/adminLogin');
    }

}
