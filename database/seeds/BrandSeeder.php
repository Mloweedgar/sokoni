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
          'logo' => 'reebook'
        ],

        2 => [
          'name' => 'manga',
          'logo' => 'manga'
        ],

        3 => [
          'name' => 'hot basic',
          'logo' => 'hot basic'
        ],
        4 => [
          'name' => 'dickies',
          'logo' => 'dickies'
        ],
      ];

      foreach ($brand as $value) {
        Brand::firstOrCreate($value);
      }
    }
}
