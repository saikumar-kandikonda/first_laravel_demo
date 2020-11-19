<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadfilecontroller extends Controller
{
    //
    public function upload(request $req){
        $result=$req->file('file')->store('../dummystorage/apidocs');
        return ["result"=>$result];
    }
}
