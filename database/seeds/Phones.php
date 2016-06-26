<?php

use Illuminate\Database\Seeder;

class Phones extends Seeder
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
          'user' => '1',
          'phone_number' => '0654988047',
        ],

        2 => [
          'user' => '1',
          'phone_number' => '0654988048',
        ],

        3 => [
          'user' => '1',
          'phone_number' => '0654988049',
        ],

      ];
      foreach ($user as $value) {
        DB::table('phones')->insert($value);
    }
}
