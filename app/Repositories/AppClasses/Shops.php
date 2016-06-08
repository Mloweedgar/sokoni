<?php
namespace App\Repositories\AppClasses;

use App\Repositories\Eloquents\ShopRepository as Shop;

class Shops {

	protected $shops;

	public function __construct(Shop $shops) {

		$this->shop = $shops;
	}

	public function getOne($id) {

		return $this->shop->oneShop($id);

	}

	public function getAll() {

		/*
		 * Organize the list into 4x4 array for slider display
		 */
		$i = $j = 1;

		foreach ($this->shop->allShops() as $value) {

			if($j == 5) {

				$i++;
				$j = 1;
			}

			$shop_array[$i][$j]['id'] = $value->id;
			$shop_array[$i][$j]['shop_name'] = $value->shop_name;


			$j++;


		}

		return $shop_array;
	}

	public function all() {
		return $this->shop->allShops();
	}

}
