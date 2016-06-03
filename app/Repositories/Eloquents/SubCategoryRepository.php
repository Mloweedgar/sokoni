<?php

namespace App\Repositories\Eloquents;

use App\Models\SubCategory;

class SubCategoryRepository {

  public function getByShopId($id) {
    return SubCategory::with('brand','product')
           ->whereHas('product', function($q) use ($id) {
             $q->where('shop_id',$id);
           })->get();
  }
}
