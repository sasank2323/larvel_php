<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form2submit extends Controller
{
    //
    function form2submitdata(Request $request)
    {
        echo "Form 2 Submitted Successfully<br>";
        $skill = $request->input('skill');
        $level= $request->input('level');
        $gender = $request->input('gender');
        print_r($skill);
        echo "Age: " . $level . "<br>";
        echo "Gender: " . $gender . "<br>"; 
    }
}
