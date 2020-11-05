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
}
