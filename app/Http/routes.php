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

// this is for profile
Route::get('/profile', function () {
    return view('user.index');
});;

Route::get('/wishlist',function(){
    return view('user.wishlist');
});

Route::get('/orders',function(){
    return view('user.order');
});

Route::get('/shopping_buddy',function(){
    return view('user.shopping_buddy');
});

Route::auth();

Route::get('/facebookLogin', 'Auth\FacebookAuthController@facebookLogin');


Route::get('/shop/{id}', 'Shop\ShopController@getShop');
Route::get('/product', 'Product\ProductController@index');

Route::get('/shop/reviews/{id}', 'Shop\ShopReviewController@getReview');


//for emails
Route::get('sendemail', function () {

    $data = array(
        'name' => "Sokoni project!",
    );

    Mail::send('emails.welcome', $data, function ($message) {

        $message->from('mloweedgar0@gmail.com', 'Sokoni project!');

        	//here you can write the email of the recipient.
        $message->to('rajeyw@gmail.com')->subject('Whats up Welcome to sokoni site');

    });

    return "Your email has been sent successfully";

});
