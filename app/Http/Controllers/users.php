<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Users 
{
    //

    public function show()
    {
        $data = User::all();
        $data2=User::where('id',1)->get();
        $data3=User::find(2);
        $data4=User::orderBy('id','desc')->get();
        $data5=User::insert([
            'name'=>'new user',
            'email'=>'sasasnk@gamil.com','password'=>'password123']);
        $data6=User::where('id',3)->update([
            'name'=>'updated user',
            'email'=>'updatedemail@gmail.com'
        ]);
        $data7=User::where('id',4)->delete();
        return view('users', ["users" => $data]);
    }
}
