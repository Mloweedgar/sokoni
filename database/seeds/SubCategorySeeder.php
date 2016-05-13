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
      ];

      foreach ($sub_category as $value) {
        SubCategory::firstOrCreate($value);
      }
    }
}
