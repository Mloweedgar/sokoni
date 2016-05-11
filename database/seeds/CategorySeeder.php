<?php

use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
          1 => [
            'category_name' => 'Clothes'
          ],

          2 => [
            'category_name' => 'Shoes'
          ],

          3 => [
            'category_name' => 'BooK'
          ],

        ];

        foreach ($category as $value) {
          Category::firstOrCreate($value);
        }
    }
}
