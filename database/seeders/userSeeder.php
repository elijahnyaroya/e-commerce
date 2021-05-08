<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // to enable as work with database
use Illuminate\Support\Facades\Hash; //for crating hash

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'=>'sunwa',
            'email'=>'sunwa@gmail.com',
            'password'=>Hash::make('12345')
        ]);
        DB::table('users')->insert([
            'name'=>'elijah ',
            'email'=>'elijah@gmail.com',
            'password'=>Hash::make('12345')
        ]);
    }
}
