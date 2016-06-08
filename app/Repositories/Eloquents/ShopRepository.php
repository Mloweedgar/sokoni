<?php

namespace App\Repositories\Eloquents;

use App\Models\Shop;


use DB;

class ShopRepository {

	public function allShops() {

		return Shop::all();
	}

	public function oneShop($id) {

		return Shop::with('reviews','ratings', 'category', 'products', 'hotDeals')->find($id);
	}

	public function allReviewsPerShop($id) {

		return Shop::find($id)->shopReviews()->with('user')->paginate(8);
	}

	public function allRatingPerShop($id) {

		return Shop::find($id)->shopRatings()->get();
	}

}
