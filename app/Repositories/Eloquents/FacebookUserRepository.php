<?php

namespace App\Repositories\Eloquents;

use App\User;

class FacebookUserRepository {

	public function findUserOrCreate($userData) {

		return User::firstOrCreate([
			'name' => $userData->name,
			'email' => $userData->email,
			'avatar' => $userData->avatar

			]);
	}
}