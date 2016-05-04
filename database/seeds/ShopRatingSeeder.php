<?php

use Illuminate\Database\Seeder;

class ShopRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop_ratings')->insert([
        	'rating' => 4.5,
        	'shop_id' => 1,
        	'user_id' => 6,
        	'rating_status' => 1,

        	]);
    }
}
