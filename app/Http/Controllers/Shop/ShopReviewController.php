<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;

use App\Repositories\AppClasses\Shops as Shop;

use App\Repositories\AppClasses\ShopReviews as ShopReview;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopReviewController extends Controller
{

	protected $shops;
	protected $shop_reviews;

	public function __construct(Shop $shops, ShopReview $shop_reviews) {

		$this->shop = $shops;
		$this->shop_review = $shop_reviews;
	}

    public function getReview($id) {

    	/*
    	 * Get shop details first
    	 */

    	$shop = $this->shop->getOne($id);

    	/*
    	 * Get all reviews for this shop
    	 */

    	$shop_review = $this->shop_review->getAll($id);

    	/*
    	 * Get shop rating for every user on review
    	 */

    	

    	return view('shop.shop_review')
    			->with([

    				'shop' => $shop,
    				'shop_review' => $shop_review

    				]);
    }
}
