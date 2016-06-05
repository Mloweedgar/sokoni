<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class ProductReview extends Model
{
    public function product() {
      return $this->belongsTo('App\Models\Product');
    }

    public function getWrittenOnAttribute($value) {

    	return Carbon::createFromTimestamp(strtotime($value))->diffForHumans();
    }
}
