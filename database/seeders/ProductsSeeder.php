<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Honda CBR650R',
            'description' => '649cc',
            'photo' => 'https://moto.honda-taiwan.com.tw/Uploads/images/Motor/1280x800/156009_2019_CBR650R.jpg',
            'price' => 199.00
         ]);
        
         DB::table('products')->insert([
             'name' => 'Honda CBR600RR',
             'description' => '599cc',
             'photo' => 'https://news.webike.tw/wp-content/uploads/2020/08/002_honda-cbr600rr.jpg',
             'price' => 399.00
         ]);
    }
}
