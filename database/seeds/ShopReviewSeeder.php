<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class ShopReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 9 ; $i++) {

        	DB::table('shop_reviews')->insert([

        		'user_id' => 1,
        		'shop_id' => 1,
        		'review' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,',
                'written_on' => Carbon::now()
        		]);
        }
    }
}
