<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Joinscontroller extends Controller
{
    //
    function joins(){

        return DB::table('branchdetails')
        ->join('students','students.id',"=",'branchdetails','branchdetails.studentid')
        // ->where('students.id',1)
        ->get();
    }
}
