<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public funtion add(){
        $data = Student::find(all);
        return view('data')->with($data);
    }
}
