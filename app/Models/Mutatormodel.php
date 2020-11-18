<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutatormodel extends Model
{
    use HasFactory;
    public $table="members";
    public $timestamps=false;
    public function SetNameAttribute($value){
       
        if(substr($value,0,3)=='Mr.'){
            echo "mr already exiists for this value";

        }
        else{
        $this->attributes['name']="Mr.".$value;
        }
    }
}
