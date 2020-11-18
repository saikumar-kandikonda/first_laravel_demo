<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apimodel extends Model
{
    use HasFactory;
    public $table="comapany";
    public $timestamps=false;
}
