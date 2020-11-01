<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontrol extends Controller
{
    //
    function formsubmit(Request $req){
      $req->validate([
          'name'=>"required",
          'email'=>"required",
          'pwd'=>"required",
          'mobile'=>"required"

      ]);
        print_r($req->input());

    }
}
