<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //this is used for only one
        // DB::table('products')->insert([
        //     "name"=>"LG MOBILE",
        //     'price'=>'20000',
        //     'category'=>'Mobiles',
        //     'discrip'=>'4gb 64',
        //     'gallery'=>'https://img.freepik.com/free-photo/elegant-smartphone-composition_23-2149437106.jpg?w=360&t=st=1678111004~exp=1678111604~hmac=0a59bd38ada10b12e7010ed565e4583c6a485e6efff96cecdbefd6d3e2606ae3',



        // ]);

            ///this is used for enter many products into database


            DB::table('products')->insert([
                ["name"=>"LG MOBILE",
                'price'=>'20000',
                'category'=>'Mobiles',
                'discrip'=>'4gb 64',
                'gallery'=>'https://img.freepik.com/free-photo/elegant-smartphone-composition_23-2149437106.jpg?w=360&t=st=1678111004~exp=1678111604~hmac=0a59bd38ada10b12e7010ed565e4583c6a485e6efff96cecdbefd6d3e2606ae3',
    
            ],

            ["name"=>"I-PHONE",
                'price'=>'40000',
                'category'=>'Mobiles',
                'discrip'=>'4gb 64',
                'gallery'=>'https://img.freepik.com/free-photo/elegant-smartphone-composition_23-2149437108.jpg?w=740&t=st=1678111205~exp=1678111805~hmac=f231e9c8f8a88dab09aab5afcca1e1a7f667dae9df771d05b4b3dfbced8d792f',
    
            ],

            ["name"=>"I-PHONE",
                'price'=>'50000',
                'category'=>'Mobiles',
                'discrip'=>'8gb 256',
                'gallery'=>'https://img.freepik.com/free-photo/elegant-smartphone-composition_23-2149437103.jpg?t=st=1678077664~exp=1678078264~hmac=411693c2d1287b1622d2ee80ec53298f84dbe385523ff0a315ad9d8d2f0ab2b5',
    
            ],
    
            ]);


    }
}
?>
