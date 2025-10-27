<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Submit_form extends Controller
{
    function adduser(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        echo $request->name;
        return "Form submitted successfully. Name: " . $name . ", Email: " . $email;
    }
}
