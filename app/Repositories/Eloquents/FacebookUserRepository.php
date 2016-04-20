<?php

namespace App\Repositories\Eloquents;

use App\Models\User;

class FacebookUserRepository {

	public function findUserOrCreate($userData) {

		return User::firstOrCreate([
			'name' => $userData->name,
			'email' => $userData->email,
			'avatar' => $userData->avatar

			]);
	}
}