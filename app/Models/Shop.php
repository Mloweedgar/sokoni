<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;

class Shop extends Model
{
    protected $fillable = ['shop_name', 'shop_logo', 'region'];
    protected $appends = ['review_count', 'average_rating'];

    public function ratings() {

    	return $this->hasOne('App\Models\ShopRating');
    }

    public function reviews() {

    	return $this->hasMany('App\Models\ShopReview');
    }


    public function getReviewCountAttribute() {

    	return $this->reviews()->count();
    }

    public function getAverageRatingAttribute() {
    	return $this->ratings()->avg('rating');
    }

    public function products() {

      return $this->hasMany('App\Models\Product');
    }

    public function category() {

      return $this->belongsToMany('App\Models\SubCategory', 'shop_categories');
    }

    public function hotDeals() {
      return $this->products()->isHot();
    }


}
