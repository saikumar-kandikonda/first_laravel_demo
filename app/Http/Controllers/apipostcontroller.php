<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\apipostmodel;

class apipostcontroller extends Controller
{
    //

    function apipost(Request $req){
     $data= new apipostmodel;

     $data->id=$req->id;
     $data->ename=$req->ename;
    $result=$data->save();
    if($result){
        return "data has been added";
    }else{
        return "fucke up";
    }
    }
}
