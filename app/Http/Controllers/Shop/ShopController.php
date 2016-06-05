<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;

use App\Repositories\AppClasses\Shops as Shop;

use App\Http\Controllers\Product\ProductCategoryController as Category;

use App\Http\Controllers\Product\ProductSubCategoryController as SubCategory;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
		protected $shops;
		protected $category;
		protected $sub_category;

    public function __construct(Shop $shops, Category $category, SubCategory $sub_category) {

    	$this->shop= $shops;
			$this->sub_category = $category;
			$this->sub_category = $sub_category;

    }

		public function render($id) {
				$shop = $this->getShop($id);
				return view('shop.get_shop', compact('shop'));
		}

    public function getShop($id) {

    	return $this->shop->getOne($id);
    }

    public function getShopList() {

    	return $this->shop->getAll();
    }
}
