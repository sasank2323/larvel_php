<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\seller;

class Testing
{
    //

     function list()
    {
        return seller::find(1)->productData;
    }

    function many()
    {
        return seller::find(1)->productDataMany;
    }
}
