<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\apimodel;
Use App\Models\apimodel2;
class apicontroller2 extends Controller
{
    //
    public function apigetdata(){
        $model1=apimodel::all();
        $model2=apimodel2::all();
        return $model1.$model2;
    }

}
