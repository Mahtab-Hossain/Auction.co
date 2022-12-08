<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bid')->insert([
            'name'=>'Iphone-X',
            "bids"=>"500$",
            "description"=>"Apple iPhone X smartphone. Announced Sep 2017. Features 5.8″ display, Apple A11 Bionic chipset",
            "category"=>"Mobile",
            "dashboard"=>"https://pixabay.com/photos/iphone-x-iphone-x-apple-mobile-3501507/",
        ]);
    }
}
