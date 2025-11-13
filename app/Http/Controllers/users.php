<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Users 
{
    //

    public function show(request $request)
    {

        $data = [
            'id' => 123,
            'name' => $request->input('name', 'sasank'),
            'email' => $request->input('email', 'sasank@example.com'),
        ];
        $request->session()->put('user_data', $data);
        echo "<pre>";
        print_r($request->all());
        echo "<br>";

        print_r($request->method());
        echo "<br>";

        print_r($request->url());
         echo "<br>";
        print_r($request->path());
        echo "<br>";
        //print_r($request->header());
        print_r($request->ip());
         
        echo "</pre>";

        return "done";
        
    }

    public function adduser(Request $request)
    {
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();
        return "User added successfully";
    }

    public function updateuser(Request $request)
    {
        $user=User::find($request->id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();
        return "User updated successfully";
    }

    public function edituser(Request $request)
    {
        $user=User::find($request->id);
        if($request->has('name')){
            $user->name=$request->name;
        }
        if($request->has('email')){
            $user->email=$request->email;
        }
        if($request->has('password')){
            $user->password=$request->password;
        }
        $user->save();
        return "User edited successfully";
    }

    public function deleteuser(Request $request)
    {
        $user=User::find($request->id);
        $user->delete();
        return "User deleted successfully";
    }

    public function twomethods(Request $request)
    {
        if($request->isMethod('get')){
            return "This is GET method";
        }
        elseif($request->isMethod('post')){
            return "This is POST method";
        }
    }

    function logout(Request $request)
    {
        $request->session()->forget('user_data');
        return "Session data cleared";
    }
}
