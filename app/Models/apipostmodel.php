<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apipostmodel extends Model
{
    use HasFactory;
    public $table="emp";
    public $timestamps=false;
}
