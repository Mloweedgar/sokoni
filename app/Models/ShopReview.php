<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class ShopReview extends Model
{

    public function shop() {

    	return $this->belongsto('App\Models\ShopReview');
    }

    public function getWrittenOnAttribute($value) {

    	return Carbon::createFromTimestamp(strtotime($value))->diffForHumans();
    }

    public function user() {

    	return $this->belongsTo('App\Models\User');
    }
}
