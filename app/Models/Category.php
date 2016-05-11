<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subCategory() {

      return $this->hasMany('App\Models\SubCategory');
    }

    public function shop() {

      return $this->belongsToMany('App\Models\Shop', 'shop_product_categories');
    }
}
