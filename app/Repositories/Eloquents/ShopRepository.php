<?php

namespace App\Repositories\Eloquents;

use App\Models\Shop;

use DB;

class ShopRepository {

	public function allShops() {

		return Shop::all();
	}

	public function oneShop($id) {

		return DB::table('shops')->join('shop_ratings', 'shops.id', '=', 'shop_ratings.shop_id')
								 ->select('shops.shop_name', 'shops.region', 'shop_ratings.rating')
								 ->where('shops.id', $id)
								 ->first();
	}
}