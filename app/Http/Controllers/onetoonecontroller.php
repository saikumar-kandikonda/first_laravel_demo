<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\onetoonemodel;

class onetoonecontroller extends Controller
{
    //
    function onetoone(){
        // return onetoonemodel::firstWhere('eid',1)->getcompany;
        return onetoonemodel::find(1)->getcompany;
        // return onetoonemodel::find(1);
    }
}
