<?php

namespace App\Repositories\AppClasses;

use App\Repositories\Eloquents\CategoryRepository as Category;

class ProductCategories {

  protected $category;
  public function __construct(Category $category) {

    $this->sub_category = $category;
  }

  public function getCategoriesByShop($shop_id) {

    return $this->category->getByShop($shop_id);
  }
}
