<?php

use Illuminate\Database\Seeder;

use App\Models\ProductPrice;

class ProductPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $value = [
        'price' => 10000,
        'product_id' => 1,

        ];

        ProductPrice::firstOrCreate($value);
    }
}
