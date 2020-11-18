<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessormodel extends Model
{
    use HasFactory;
 
    public $table="members";
    public function getnameAttribute($value){
        return ucfirst($value);
    }
    public function getidAttribute($value){
        return $value.'143';
    }
}
