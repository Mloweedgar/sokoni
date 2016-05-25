<?php

use Illuminate\Database\Seeder;

use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $brand = [
        1 => [
          'name' => 'reebook',
          'sub_category_id' => 1,
        ],

        2 => [
          'name' => 'manga',
          'sub_category_id' => 1,
        ],

        3 => [
          'name' => 'hot basic',
          'sub_category_id' => 1,
        ],
        4 => [
          'name' => 'dickies',
          'sub_category_id' => 1,
        ],
      ];

      foreach ($brand as $value) {
        Brand::firstOrCreate($value);
      }
    }
}
