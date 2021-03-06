<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 1; $i <= 16; $i++) {

        	DB::table('shops')->insert([
        		'shop_name' => 'Shop-'.$i,
        		'shop_logo' => 'images/logo/shop-'.$i,
            'region' => 'Dar es Salaam',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        		]);
        }
    }
}
