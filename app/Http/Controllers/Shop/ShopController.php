<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;

use App\Repositories\AppClasses\Shops as Shop;

use App\Http\Controllers\Product\ProductCategoryController as Category;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
		protected $shops;
		protected $category;

    public function __construct(Shop $shops, Category $category) {

    	$this->shop= $shops;
			$this->sub_category = $category;

    }

    public function getShop($id) {

    	$shop = $this->shop->getOne($id);

			$category_list = $this->shop->getShopCategories($id);

    	return view('shop.get_shop')->with([
																					'shop' => $shop,
																					'category_list' => $category_list]);
    }

    public function getShopList() {

    	return $this->shop->getAll();
    }
}
