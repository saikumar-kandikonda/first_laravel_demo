<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\routebingingmodel;
class routebidingcontroller extends Controller
{
    //
    public function routebinding(routebingingmodel $key){
    return $key;
    }
}
