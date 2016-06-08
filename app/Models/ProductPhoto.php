<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
    public function product() {
      return $this->belongsTo('App\Models\Product');
    }

    public function scopePrimary($query) {
      return $query->where('privilege','primary');
    }
}
