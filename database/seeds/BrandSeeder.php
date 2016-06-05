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
          'name' => 'reebook'
        ],

        2 => [
          'name' => 'manga',
        ],

        3 => [
          'name' => 'hot basic',
        ],
        4 => [
          'name' => 'dickies',
        ],
      ];

      foreach ($brand as $value) {
        Brand::firstOrCreate($value);
      }
    }
}
