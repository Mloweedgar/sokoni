<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

use App\Models\ProductReview;

class ProductReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i = 1; $i <= 9 ; $i++) {

        ProductReview::firstOrCreate([

          'user_id' => 1,
          'product_id' => 1,
          'review' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,',
          'written_on' => Carbon::now()->addHour($i),
          ]);
      }
    }
}
