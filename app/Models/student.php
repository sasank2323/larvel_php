<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Facades\Http;

class student extends Model
{
    protected $table = 'student';

    // when you getting data this will change the data and show this plus value 
    function getMarksAttribute($val)
    {
        return $val+100;
    }

    function setMarksAttribute($val)
    {
        $this->attributes['marks']=6969;
    }
// when added that specific column this will apply 
    function setAddressAttribute($val)
    {
        $this->attributes['address']="testing";
    }

   

}
