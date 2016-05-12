<?php

use Illuminate\Database\Seeder;

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
      ];

      foreach ($brand as $value) {
        DB::table('brands')->insert($value);
      }
    }
}