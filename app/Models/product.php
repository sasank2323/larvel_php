<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    // many to one relation

    function connection()
    {
       return $this->belongsTo('App\models\seller');
    }
}
