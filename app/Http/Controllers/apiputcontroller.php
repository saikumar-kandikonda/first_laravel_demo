<?php

namespace App\Http\Controllers;
Use App\Models\apipostmodel;

use Illuminate\Http\Request;
use Validator;

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
       function searchapi($name){
        $result=apipostmodel::where("ename","like","%".$name."%")->get();
        if($result->count()>0){
          return $result;
      }else
      {
          return "no match found";
      }


       }
       function savetomydb(request $req){
     $rules=array("id"=>"required");
     $validator=validator::make($req->all(),$rules);
     if($validator->fails()){
        return $validator->errors();    
     }else{
        return ["2323"=>"fdffd"];
     }
    

       }

}
