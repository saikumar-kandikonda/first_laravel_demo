<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Student;

class Membersfromdatabase extends Controller
{
    //
    function showlist(){
        $data=Student::all();
        return view("list",['member'=>$data]);
    }
}
