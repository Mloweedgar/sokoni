<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
          'name' => 'rajab',
          'email' => 'raj@example.com',
          'avatar' => 'avatar',
          'password' => bcrypt('sokoni'),
        ],

        2 => [
          'name' => 'rodrick',
          'email' => 'rodrick@example.com',
          'avatar' => 'avatar',
          'password' => bcrypt('sokoni'),
        ],

        3 => [
          'name' => 'edga',
          'email' => 'edga@example.com',
          'avatar' => 'avatar',
          'password' => bcrypt('sokoni'),
        ],

      ];
      foreach ($user as $value) {
        DB::table('users')->insert($value);
      }
    }
}
