<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cron extends Controller
{
    //

    function add()
    {
        return "add";
    }

    function update($name)
    {
        return "update" . $name;
    }

    function delete()
    {
        return "delete";
    }
}
