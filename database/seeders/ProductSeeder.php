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
            'name'=>'Samsung UA32N5000AK,32 Inch HD LED Digital TV DVBT2/S2,Clear Motion',
            'price'=>'400',
            'description'=>'Enjoy in full clarity HD on the SAMSUNG UA32N5000AK, 32 inch LED Digital TV.The 32" backlit LED panel of the television produces.',
            'category'=>'mobile',
            'gallery'=>'https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/36/169643/1.jpg?4446'
        ]);

        DB::table('products')->insert([
            'name'=>'LG 22" AC/DC LED DIGITAL TV ',
            'price'=>'500',
            'description'=>'The LG 22 inch HD LED TV’s makes a perfect addition to contemporary rooms. When switched on, the backlit LED screen churns out images and videos with amazing contrast and details.',
            'category'=>'mobile',
            'gallery'=>'https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/44/584933/1.jpg?2867'
        ]);

        DB::table('products')->insert([
            'name'=>'Sony 32R300E- 32"',
            'price'=>'100',
            'description'=>'Experience HD picture quality, incredible contrast and sharp, vibrant, life-like picture with the Sony R300-Series HDTV. This compact HDTV is perfect for smaller size rooms, such as a d',
            'category'=>'mobile',
            'gallery'=>'https://ke.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/58/339533/1.jpg?3743'
        ]);
        
    }
}
