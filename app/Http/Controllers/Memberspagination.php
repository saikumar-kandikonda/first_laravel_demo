<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagination;
class Memberspagination extends Controller
{
    //
    function showdata(){
        $data=Pagination::paginate(4);

        return view("listpagination",['list'=>$data]);
    }
}
