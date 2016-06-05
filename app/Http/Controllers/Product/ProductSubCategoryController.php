<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;

use App\Repositories\AppClasses\ProductSubCategories as SubCategory;

use App\Http\Requests;

use App\Http\Controllers\Controller;

class ProductSubCategoryController extends Controller
{
  protected $sub_category;

  public function __construct(subCategory $sub_category) {

    $this->sub_category = $sub_category;
  }

  public function getShopSubCategories($shop_id) {

    return $this->sub_category->getSubCategoriesByShop($shop_id);
  }

}
