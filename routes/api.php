<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apicontroller;
use App\Http\Controllers\apicontroller2;
use App\Http\Controllers\apipostcontroller;
use App\Http\Controllers\apiputcontroller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("api",[apicontroller::class,'api']);
Route::get("apigetdata",[apicontroller2::class,'apigetdata']);
Route::post("apipost",[apipostcontroller::class,'apipost']);
Route::put("apiput",[apiputcontroller::class,'apiput']);
Route::delete("deleterecord/{key}",[apiputcontroller::class,'deleterecord']);