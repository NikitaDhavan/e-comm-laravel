<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=> 'Oppo Mobile',
                'price'=>'300',
                'description'=>'A smart phone with 8gb RAM and more features',
                'category'=>'mobile',
                'gallery'=>'\img\oppo.jpg'
            ],
            [
                'name'=> 'Panasonic Tv',
                'price'=>'3000',
                'description'=>'A Tv more features',
                'category'=>'TV',
                'gallery'=>'\img\panasonic.jpg'
            ],
            [
                'name'=> 'LG Mobile',
                'price'=>'500',
                'description'=>'A smart phone with 4gb RAM and more features',
                'category'=>'mobile',
                'gallery'=>'\img\lg.jpg'
            ],
            [
                'name'=> 'Lenevo Tv',
                'price'=>'5000',
                'description'=>'A TV with more features',
                'category'=>'mobile',
                'gallery'=>'\img\lenovo.png'
            ],
            [
                'name'=> 'Fridge',
                'price'=>'400',
                'description'=>'A Fridge with more features',
                'category'=>'fridge',
                'gallery'=>'\img\fridge.jpg'
            ]
        ]);
    }
}
