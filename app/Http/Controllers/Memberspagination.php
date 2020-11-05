<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Memberspagination extends Controller
{
    //
    function showdata(){
        return view("listpagination");
    }
}
