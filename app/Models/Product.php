<?php

namespace App\Models;

use DB;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function shop() {

      return $this->belongsTo('App\Models\Shop');

    }

    public function brand() {

      return $this->belongsTo('App\Models\Brand');

    }

    public function photos() {
      return $this->hasMany('App\Models\ProductPhoto')->select(['product_id','link']);
    }

    public function reviews() {
      return $this->hasMany('App\Models\ProductReview')->select(['product_id', 'review', 'written_on']);
    }

    public function averageRating() {

      return $this->hasOne('App\Models\ProductRating')
              ->select(DB::raw('product_id, avg(rating) as rating'))
              ->groupBy('product_id');
    }

    public function reviewCount() {

      return $this->hasOne('App\Models\ProductReview')
              ->select(DB::raw('product_id, count(review) as count'))
              ->groupBy('product_id');
    }

    public function latestPrice() {
      return $this->hasOne('App\Models\ProductPrice')->latest()->select(['product_id', 'price']);
    }
}
