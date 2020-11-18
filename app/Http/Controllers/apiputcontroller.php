<?php

namespace App\Http\Controllers;
Use App\Models\apipostmodel;

use Illuminate\Http\Request;

class apiputcontroller extends Controller
{
    //
    function apiput(Request $req){
        $data=apipostmodel::find($req->id);
        $data->id=$req->id;
        $data->ename=$req->ename;
        $result=$data->save();
        if($result){
            return "data has been updated";
        }else{
            return "fucke up";
        }

   
       }

       function deleterecord($key){
        $data=apipostmodel::find($key);
        $result=$data->delete();
        if($result){
            return "data has been detelted";
        }else{
            return "fucke up";
        }


       }

}
