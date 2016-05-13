<?php

use Illuminate\Database\Seeder;

use App\Models\ShopRating;

class ShopRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value = [
        	'rating' => 4.5,
        	'shop_id' => 1,
        	'user_id' => 1,
        	'rating_status' => 1,

        	];

          ShopRating::firstOrCreate($value);
    }
}
