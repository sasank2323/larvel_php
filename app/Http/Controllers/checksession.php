<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checksession
{
    //

    function checksessiondata(Request $request)
    {
        if($request->session()->has('user_data'))
        {
            $data=$request->session()->get('user_data');
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        }
        else
        {
            return "No session data found";
        }
    }
}
