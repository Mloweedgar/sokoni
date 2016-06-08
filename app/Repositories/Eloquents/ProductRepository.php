<?php

namespace App\Repositories\Eloquents;

use App\Models\Product;

class ProductRepository {

  public function getOne($id) {
    return Product::with('photos', 'shop', 'reviews', 'ratings')->find($id);
  }

  public function getRelatedBySubCategory($sub_category_id, $product_id) {
    return Product::with('primaryPhoto')
                ->where('sub_category_id', $sub_category_id)
                ->where('id', '!=', $product_id)->get();
  }

  public function getRelatedByShop($shop_id, $product_id, $limit) {
    return Product::with('primaryPhoto')
                ->where('shop_id', $shop_id)
                ->where('id', '!=', $product_id)
                ->take($limit)
                ->get();
  }


}
