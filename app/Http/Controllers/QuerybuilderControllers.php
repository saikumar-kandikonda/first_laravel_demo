<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class QuerybuilderControllers extends Controller
{
    //
    function dboperations(){
        $id=13;
        $data=(array)DB::table('students')->find($id);
        if($data){
            echo "number already exists";
        }else{
            return DB::table('students')
            ->insert(['id'=>$id,
                 'name'=>'dffd']);
                 
        }
        // ->where('id','5')     //this will get all the data where id=5
        //  ->get();
                                        //this is for insert
                                        //  ->insert(['id'=>'232',
                                        // 'name'=>'dffd']);
       
                                    //this is for update
                                        //  ->update(['id'=>'232',
                                        // 'name'=>'dfdfasfasfasf']);
                                        
                                        //this is for deltee
                                        // ->where('id','5')
                                        // ->delete();
     
    }
}
