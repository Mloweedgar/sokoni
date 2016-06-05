<?php

namespace App\Repositories\AppClasses;

use App\Repositories\Eloquents\ProductRepository as Product;

class Products {

  protected $product;

  public function __construct(Product $product) {
    $this->product = $product;
  }

  public function getProduct($id) {
    return $this->product->getOne($id);
  }

  public function getRelatedProductsBySubCategory($sub_category_id, $product_id) {
    return $this->product->getRelatedBySubCategory($sub_category_id, $product_id);
  }

  public function getRelatedProductByShop($shop_id, $product_id, $limit) {
    return $this->product->getRelatedByShop($shop_id, $product_id, $limit);
  }

}
