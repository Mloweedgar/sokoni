<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;

class Shop extends Model
{
    protected $fillable = ['shop_name', 'shop_logo', 'region'];

    public function shopRatings() {

    	return $this->hasOne('App\Models\ShopRating');
    }

    public function shopReviews() {

    	return $this->hasMany('App\Models\ShopReview');
    }

    public function reviewCount() {

    	return $this->hasOne('App\Models\ShopReview')
    			->select(DB::raw('shop_id, count(*) as review_count'))
    			->groupBy('shop_id');
    }

    public function averageRating() {

    	return $this->hasOne('App\Models\ShopRating')
    			->select(DB::raw('shop_id, avg(rating) as average_rating'))
    			->groupBy('shop_id');
    }


    public function getReviewCountAttribute() {
    	/*
    	 * Load the relation if not loaded
    	 */

    	if(! array_key_exists('reviewCount', $this->relations))
    		$this->load('reviewCount');

    	$related = $this->getRelation('reviewCount');

    	/*
    	 * Return the count directly
    	 */
    	return ($related) ? (int) $related->review_count : 0;
    }

    public function getAverageRatingAttribute() {
    	/*
    	 * Load the relation if not loaded
    	 */

    	if(! array_key_exists('averageRating', $this->relations))
    		$this->load('averageRating');

    	$related = $this->getRelation('averageRating');

    	/*
    	 * Return the count directly
    	 */
    	return ($related) ? (int) $related->average_rating : 0.5;
    }

    public function product() {

      return $this->hasMany('App\Models\Product');
    }

    public function category() {

      return $this->belongsToMany('App\Models\SubCategory', 'shop_categories');
    }


}
