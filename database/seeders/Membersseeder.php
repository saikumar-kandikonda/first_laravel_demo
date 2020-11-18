<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Str;

class Membersseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $random=rand(150000,20000000);
        DB::table('members')->insert([
            'id'=>$random,  
            'name'=>Str::random(10) 
        
        ]);

    }
}
