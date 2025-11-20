<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Facades\Http;

class student extends Model
{
    protected $table = 'student';

    function getMarksAttribute($val)
    {
        return $val+100;
    }

   

}
