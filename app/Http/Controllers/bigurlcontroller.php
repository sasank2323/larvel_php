<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bigurlcontroller extends Controller
{
    //
    function showbigurl()
    {
        //return redirect()->to('/bigurl/bigger'); or 
        return redirect()->route('hm');
    }
}
