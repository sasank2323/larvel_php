<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bigurlcontroller extends Controller
{
    //
    function showbigurl()
    {
        //return redirect()->to('/bigurl/bigger'); or 
        // this is simple way of using the same route name in blade file
        return redirect()->route('hm');
    }

    function showbigurlwithparameter()
    {
        // redirecting with parameter 
        return redirect()->route('parameter',['id'=>1234]);
    }
}
