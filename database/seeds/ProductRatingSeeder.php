<?php

use Illuminate\Database\Seeder;

use App\Models\ProductRating;

class ProductRatingSeeder extends Seeder
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
        'product_id' => 1,
        'user_id' => 1,

        ];

        ProductRating::firstOrCreate($value);
    }
}
