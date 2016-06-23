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

Route::get('/get-brands/{id}', 'Product\ProductBrandController@getByCategoryId');

Route::get('/orders',function(){
    return view('user.order');
});

Route::get('/shopping_buddy',function(){
    return view('user.shopping_buddy');
});

Route::get('/shopping-cart', function() {
  return view('user.shopping-cart');
});

Route::auth();

Route::get('/facebookLogin', 'Auth\FacebookAuthController@facebookLogin');

Route::get('/shop', 'Shop\ShopController@getAll')->middleware('cors');
Route::get('/shop/{id}', 'Shop\ShopController@getShop')->middleware('cors');
Route::get('/product/{id}', 'Product\ProductController@render')->middleware('cors');

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

Route::get('/alert/{alertType}/{message}', function($alertType, $message) {

  return alert($alertType, $message);
});

Route::get('/rate-product', function() {
  return view('product.rate-product');
});


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});
