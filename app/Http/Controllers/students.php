<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

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
}
