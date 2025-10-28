<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form2submit extends Controller
{
    //
    function form2submitdata(Request $request)
    {
        $request->validate([
            'skill' => 'required|array|min:1',
            'level' => 'required',
            'gender' => 'required',
            'username'=>'required|uppercase'
        ],[
            'skill.required' => 'Please select at least one skill.',
            'username.uppercase'=>'The username must be in uppercase letters.'
        ]);
        echo "Form 2 Submitted Successfully<br>";
        $skill = $request->input('skill');
        $level= $request->input('level');
        $gender = $request->input('gender');
        print_r($skill);
        echo "Age: " . $level . "<br>";
        echo "Gender: " . $gender . "<br>"; 
    }
}
