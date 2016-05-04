<?php

namespace App\Repositories\AppClasses;

use App\Repositories\Eloquents\ShopRepository as Shop;

class ShopRatings {

	protected $shops;

	public function __construct(Shop $shops) {

		$this->shop = $shops;
	}

	public function getAll($shop_id) {

		return $this->shop
	}
}