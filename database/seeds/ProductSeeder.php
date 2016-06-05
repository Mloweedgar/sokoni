<?php

use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = [
        1 => [
          'name' => 'Shirt',
          'shop_id' => 1,
          'brand_id' => 1,
          'sub_category_id' => 1,
          'description' => 'Lorem Tupos'
        ],

        2 => [
          'name' => 'Sneaker',
          'shop_id' => 2,
          'brand_id' => 1,
          'sub_category_id' => 1,
          'description' => 'Lorem Tupos'
        ],

        3 => [
          'name' => 'High Hills',
          'shop_id' => 1,
          'brand_id' => 1,
          'sub_category_id' => 1,
          'description' => 'Lorem Tupos'
        ],

        4 => [
          'name' => 'Tshirt',
          'shop_id' => 2,
          'brand_id' => 1,
          'sub_category_id' => 1,
          'description' => 'Lorem Tupos'
        ],

      ];
      foreach ($user as $value) {
        Product::firstOrCreate($value);
      }
    }
}
