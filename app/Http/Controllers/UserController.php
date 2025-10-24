<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser()
    {
        return view('ss');
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
