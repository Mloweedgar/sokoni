<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['shop_name', 'shop_logo', 'region'];

    public function shopRatings() {

    	return $this->hasOne('App\Models\ShopRating');
    }

    public function shopReviews() {

    	return $this->hasMany('App\Models\ShopReview');
    }
}
