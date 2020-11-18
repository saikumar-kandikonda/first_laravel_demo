<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class onetoonemodel extends Model
{
    use HasFactory;
    public $table="emp";
    public $timestamps=false;
    public function getcompany(){

    return $this->hasOne('App\Models\onetoonecompany');

    }
}
