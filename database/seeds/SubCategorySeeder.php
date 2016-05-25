<?php

use Illuminate\Database\Seeder;

use App\Models\SubCategory;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $sub_category = [
        1 => [
          'sub_category_name' => 'Shoe',
          'category_id' => 1,
        ],

        2 => [
          'sub_category_name' => 'Shirt',
          'category_id' => 1,
        ],
        3 => [
          'sub_category_name' => 'Trouser',
          'category_id' => 1,
        ],
        4 => [
          'sub_category_name' => 'Skirt',
          'category_id' => 1,
        ],
      ];

      foreach ($sub_category as $value) {
        SubCategory::firstOrCreate($value);
      }
    }
}
