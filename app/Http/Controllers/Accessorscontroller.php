<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Accessormodel;
Use Illuminate\Support\Facades\DB;

class Accessorscontroller extends Controller
{
    //
    function acess(){
      return  Accessormodel::all();
    }
}
