<?php

namespace App\Models;

use DB;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $appends = ['review_count','average_rating', 'latest_price'];

    public function shop() {

      return $this->belongsTo('App\Models\Shop');

    }

    public function brand() {

      return $this->belongsTo('App\Models\Brand');

    }

    public function photos() {
      return $this->hasMany('App\Models\ProductPhoto');
    }

    public function reviews() {
      return $this->hasMany('App\Models\ProductReview');
    }

    public function ratings() {
      return $this->hasMany('App\Models\ProductRating');
    }

    public function getAverageRatingAttribute() {
      return $this->ratings()->avg('rating');
    }

    public function getReviewCountAttribute() {
      return $this->reviews()->count();
    }

    public function getDiscountFactorAttribute($value) {
      return $value*100;
    }

    public function price() {
      return $this->hasMany('App\Models\ProductPrice')->select(['product_id', 'price']);
    }

    public function getLatestPriceAttribute() {
      return $this->price()->latest()->first();
    }

    public function primaryPhoto() {
      return $this->photos()->primary();
    }

    public function scopeIsHot($query) {
      return $query->where('hot',1);
    }

}
