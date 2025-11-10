<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
class users
{
    //

    function show()
    {
        $users = DB::select('select * from student');
        return view('users',["users"=>$users]);
    }
}
