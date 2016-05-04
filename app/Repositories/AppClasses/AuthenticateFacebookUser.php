<?php

namespace App\Repositories\AppClasses;

use Laravel\Socialite\Contracts\Factory as Socialite;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Eloquents\FacebookUserRepository as UserRepository;

class AuthenticateFacebookUser {

	private $users;
	private $socialite;
	private $auth;

	public function  __construct(UserRepository $users, Socialite $socialite, Auth $auth) {
		
		$this->users = $users;
		$this->socialite = $socialite;
		$this->auth = $auth;
	}

	public function execute($hasCode, $listener) {

		//Check if there is no code
		if(!$hasCode) return $this->getAuthorizationFirst();

		//If there is code then fetch user
		$user = $this->users->findUserOrCreate($this->getFacebookUser());


		//Set login status to true
		Auth::login($user, true);


		return $listener->userHasLoggedIn($user);
	}

	public function getAuthorizationFirst() {

		//Get the code
		return $this->socialite->driver('facebook')->redirect();
	}

	public function getFacebookUser() {

		return $this->socialite->driver('facebook')->user();
	}
}