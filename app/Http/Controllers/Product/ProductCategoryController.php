<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;

use App\Repositories\AppClasses\ProductCategories as Category;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductCategoryController extends Controller
{
    protected $category;

    public function __construct(Category $category) {

       $this->category = $category;
    }

}
