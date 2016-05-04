<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use Socialite;
use App\Repositories\AppClasses\AuthenticateFacebookUser as AuthenticateUser;

class FacebookAuthController extends Controller
{
    public function facebookLogin(AuthenticateUser $authenticateUser, Request $request) {

    	return $authenticateUser->execute($request->has('code'), $this);
    }

    public function userHasLoggedIn($user) {
    	
        return redirect('/');
    }
}
