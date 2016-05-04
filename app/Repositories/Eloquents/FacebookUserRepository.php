<?php

namespace App\Repositories\Eloquents;

use App\Models\User;

class FacebookUserRepository {

	public function findUserOrCreate($userData) {

		/*
		 * Find user for the corresponidng details
		 */
		$existing_user = User::where('email', $userData->email)->first();

		if(is_null($existing_user)) {

			return User::Create([

				'name' => $userData->name,
				'email' => $userData->email,
				'avatar' => $userData->avatar,
				'password' => bcrypt('sokoni')

			]);

		} else return $existing_user;

	}
}