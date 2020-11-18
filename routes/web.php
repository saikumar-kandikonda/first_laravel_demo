<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontrol;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Databaseuser;
Use App\Http\Controllers\Membersfromdatabase;
Use App\Http\Controllers\Memberspagination;
Use App\Http\Controllers\Savedataintodb;
Use App\Http\Controllers\Deletefromdb;
Use App\Http\Controllers\QuerybuilderControllers;
Use App\Http\Controllers\Aggregatefunctioncontroller;
Use App\Http\Controllers\Joinscontroller;
Use App\Http\Controllers\Accessorscontroller;
Use App\Http\Controllers\Mutatorcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/firstpage/{id}', function ($id) {
//     return view('firstpage',["name"=>"$id"]);
// });

 Route::view("/form","form");
 Route::post('/usercontrol', [UserControl::class, 'formsubmit']);
Route::get("/users",[UsersController::class,'viewload']);
Route::view("/home","home")->middleware('protectedpage');
Route::view("/noaccess","noaccess");
Route::get("/databaseuser",[Databaseuser::class,"index"]);
Route::get("pagination",[Memberspagination::class,"showdata"]);
Route::get("list",[Membersfromdatabase::class,"showlist"]);
Route::Post("savedata",[Savedataintodb::class,"adddata"]);
Route::view("/savedata","savedataintodb");
Route::get("deleterecords",[Deletefromdb::class,"deletelist"]);
Route::get("delete/{id}",[Deletefromdb::class,"delete"]);
Route::get("tobeupdated/{id}",[Deletefromdb::class,"tobeupdated"]);
Route::Post("update",[Deletefromdb::class,"update"]);
Route::get("query",[QuerybuilderControllers::class,"dboperations"]);
Route::get("aggregate",[Aggregatefunctioncontroller::class,"aggregate"]);
Route::get("joins",[Joinscontroller::class,"joins"]);
Route::get("acess",[Accessorscontroller::class,"acess"]);
Route::get("mutate",[Mutatorcontroller::class,"mutate"]);

// Route::group(['middleware'=>['protectedgroup']],function(){

//     Route::view("/home","home");
//     Route::get("/users",[UsersController::class,'viewload']);

// });


// Route::get('/comehere', function () {
//     return view('form');
// });