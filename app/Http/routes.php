<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::auth();

Route::get('/facebookLogin', 'Auth\FacebookAuthController@facebookLogin');

<<<<<<< HEAD
Route::get('/shop/{id}', 'Shop\ShopController@getShop');
=======
Route::get('shop', function() {
	return view('shopv2');
});


//for emails
Route::get('sendemail', function () {

    $data = array(
        'name' => "Sokoni project!",
    );

    Mail::send('emails.welcome', $data, function ($message) {

        $message->from('mloweedgar0@gmail.com', 'Sokoni project!');
        
        	//here you can write the email of the recipient.
        $message->to('nobbyand1@gmail.com')->subject('Whats up Welcome to sokoni site');

    });

    return "Your email has been sent successfully";

});

>>>>>>> 27d99df5a55fae838c17d9df6eab4e4f11ebc29c
