<?php

use Illuminate\Database\Seeder;

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
          'image_link_1' => 'photos/reebook.png',
          'image_link_2' => 'photos/reebook.png',
          'image_link_3' => 'photos/reebook.png',
          'shop_id' => 1,
          'brand_id' => 1
        ],

        2 => [
          'name' => 'Sneaker',
          'image_link_1' => 'photos/link.png',
          'image_link_2' => 'photos/reebook.png',
          'image_link_3' => 'photos/reebook.png',
          'shop_id' => 1,
          'brand_id' => 1
        ],

        3 => [
          'name' => 'High Hills',
          'image_link_1' => 'fashonista.png',
          'image_link_2' => 'photos/reebook.png',
          'image_link_3' => 'photos/reebook.png',
          'shop_id' => 1,
          'brand_id' => 1
        ],

        4 => [
          'name' => 'Tshirt',
          'image_link_1' => 'photos/reebook.png',
          'image_link_2' => 'photos/reebook.png',
          'image_link_3' => 'photos/reebook.png',
          'shop_id' => 1,
          'brand_id' => 1
        ],

      ];
      foreach ($user as $value) {
        DB::table('products')->insert($value);
      }
    }
}
