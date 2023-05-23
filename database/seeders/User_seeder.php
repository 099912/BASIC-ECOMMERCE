<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class User_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     ////seeder is use to add fake data in db just to check
     //we can simply add password like other to save 
     //but we use encode it first using hash to encode
    public function run(): void
    {
        //
        DB::table("user")->insert([
            'name'=>'Faizan Ijaz',
            'email'=>'faizi@gmail.com',
            'password'=>Hash::make('12345')


        ]);

    }
}
?>