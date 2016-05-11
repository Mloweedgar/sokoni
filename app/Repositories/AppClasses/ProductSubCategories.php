<?php

namespace App\Repositories\AppClasses;

use App\Repositories\Eloquents\SubCategoryRepository as SubCategory;

class ProductSubCategories {

  protected $sub_category;

  public function __construct(SubCategory $sub_category) {

    $this->sub_category = $sub_category;
  }

  
}
