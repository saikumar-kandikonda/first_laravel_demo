<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Savedataintodbmodel;

class Savedataintodb extends Controller
{
 function adddata(Request $req){
    // $member = new Savedataintodbmodel;
    $data=[
        "id"=>$req->id,
        "name"=>$req->name,
    ];
    // $member->save();
    Savedataintodbmodel::create($data);
 }
    
}
