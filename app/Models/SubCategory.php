<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public function category() {

      return $this->belongsTo('App\Models\Category');
    }

    public function brand() {

      return $this->hasMany('App\Models\Brand');
    }

    public function product() {

      return $this->hasManyThrough('App\Models\Product', 'App\Models\Brand');
    }
}
