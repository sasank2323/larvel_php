<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Http;

class students
{
    function getstudents()
    {
        $studentmodel=new \App\Models\student;
        //or $student = new Student();
         echo $studentmodel->get_fun();
        $students = student::all();
        return view('students',["students"=>$students]);
        
    }

     function get_data_from_api()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return view('students', ['data' => $response->json()]);
    }

}
