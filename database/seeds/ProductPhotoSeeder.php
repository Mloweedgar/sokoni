<?php

use Illuminate\Database\Seeder;

use App\Models\ProductPhoto;

class ProductPhotoSeeder extends Seeder
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
          'link' => 'photos/reebook.png',
          'product_id' => 1,
        ],
        2 => [
          'link' => 'photos/reebook.png',
          'product_id' => 1,
        ],
      ];
      foreach ($user as $value) {
        ProductPhoto::firstOrCreate($value);
      }
    }
}
