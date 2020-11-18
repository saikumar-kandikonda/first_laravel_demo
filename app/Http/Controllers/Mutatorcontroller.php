<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Str;
use App\Models\Mutatormodel;

class Mutatorcontroller extends Controller
{
    //
    function mutate(){


        // return DB::table('members')->get();  
        // return Mutatormodel::all();
        $data= new Mutatormodel;
        $id=rand(1000,23000);
        $data->id=$id;
       
        // $data->name='Mr.b6HUuvaxqR';
        $data->name=bin2hex(random_bytes(12));
        $data->save();
    }
}
