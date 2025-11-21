<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Http;
use Illuminate\support\Facades\DB;

class students
{
    function show()
    {
        return student::all();
    }
    function getstudents()
    {
        // $studentmodel=new \App\Models\student;
        // //or $student = new Student();
        //  echo $studentmodel->get_fun();
        // $students = student::all();
        $students =DB::table('student')->get();
        $wherecom=DB::table('student')->where('id','>',1)->get();
        $update=DB::table('student')->where('id',3)->update([
            'name'=>'updated name',
            'roll_number'=>22,
            'marks'=>88,
            'address'=>'updated address'
        ]);
        DB::table('student')->insert([
            'name'=>'new student',
            'roll_number'=>1,
            'marks'=>90,
            'address'=>'new address'
        ]);
        DB::table('student')->where('id',4)->delete();
        echo $students;
       // return view('students',["students"=>$students]);
        
    }

     function get_data_from_api()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return view('students', ['data' => $response->json()]);
    }

    function save()
    {
        $student =new Student();
        $student->name="sasank";
        $student->roll_number=999;
        $student->marks=99;
        $student->address="sjhwvjvhv";
        if($student->save()){
            print_r("done");
        }
        else{
            print_r("not done");
        }

    }

}
