<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;

use App\Repositories\AppClasses\Shops as Shop;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
	protected $shops;

    public function __construct(Shop $shops) {

    	$this->shop= $shops;

    }

    public function getShop($id) {

    	$shop = $this->shop->getOne($id);

    	return view('shop.get_shop')->with(['shop' => $shop]);
    }

    public function getShopList() {

    	return $this->shop->getAll();
    }
}
