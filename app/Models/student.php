<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'student';

    function get_fun()
    {
        return "ss";
    }
}
