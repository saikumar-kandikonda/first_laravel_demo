<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deletefromdbmodel;

class Deletefromdb extends Controller
{
    //
    function deletelist(){
        $data=Deletefromdbmodel::all() ;
        return view("deletefromdbview",["members"=>$data]);
    
    }
    function delete($id){
        $data=Deletefromdbmodel::find($id);
        $data->delete();
       return redirect('deleterecords');

    }
    function tobeupdated($id){
        $data=Deletefromdbmodel::find($id);
    return view ("editandupdateview",["members"=>$data]);;
    }

     function update(Request $req){
         
        $data=Deletefromdbmodel::find($req->id);
        $data->id=$req->userid;
        $data->name=$req->name;
        $data->save();
        return view('deletefromdbview');
    }
    
}
