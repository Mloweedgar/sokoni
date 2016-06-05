<?php

namespace App\Repositories\Eloquents;

use App\Models\Product;

class ProductRepository {

  public function getOne($id) {
    return Product::with('averageRating','reviewCount', 'latestPrice', 'photos','reviews')->find($id);
  }

  public function getRelatedBySubCategory($sub_category_id, $product_id) {
    return Product::with('averageRating', 'latestPrice','photos')
                ->where('sub_category_id', $sub_category_id)
                ->where('id', '!=', $product_id)->get();
  }

  public function getRelatedByShop($shop_id, $product_id, $limit) {
    return Product::with('averageRating', 'photos')
                ->where('shop_id', $shop_id)
                ->where('id', '!=', $product_id)
                ->limit($limit)
                ->get();
  }


}
