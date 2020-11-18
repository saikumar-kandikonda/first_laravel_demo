<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class mutlipledbcontroller extends Controller
{
    //
    public function mutlipledb(){
        return DB::Connection('mysql2')->table('emptest2')->get();
    }
}
