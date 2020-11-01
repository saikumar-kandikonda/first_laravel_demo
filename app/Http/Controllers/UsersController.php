<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function viewload(){
    return view('users',["name"=>["sai","raju","fucker"]]);
    }
}
