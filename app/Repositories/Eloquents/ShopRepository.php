<?php

namespace App\Repositories\Eloquents;

use App\Models\Shop;

class ShopRepository {

	public function allShops() {

		return Shop::all();
	}

	public function oneShop($id) {

		return Shop::find($id);
	}
}