<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Aggregatefunctioncontroller extends Controller
{
    //
    function aggregate(){

$min=DB::table('students')->min('id');
$max=DB::table('students')->max('id');
echo "minimum is&nbsp&nbsp".$min."<br>maximum is&nbsp".$max;
    }
}
