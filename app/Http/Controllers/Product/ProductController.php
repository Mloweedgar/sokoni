<?php

namespace App\Http\Controllers\Product;

use App\Repositories\AppClasses\Products as Product;

use App\Http\Controllers\Shop\ShopController as Shop;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    protected $product;
    protected $request;
    protected $shop;

    public function __construct(Product $product, Request $request, Shop $shop) {
      $this->product = $product;
      $this->request = $request;
      $this->shop = $shop;
    }

    public function render($id) {
      $product = $this->product->getProduct($id);

      //dd($product);

      $related_products_sub_category = $this->product->getRelatedProductsBySubCategory($product->sub_category_id, $product->id);

      $related_products_shop = $this->product->getRelatedProductByShop($product->shop_id,$product->id, 3);

      if($this->request->ajax()) {
        return response()->success(compact('product','related_shop', 'related_products_sub_category', 'related_products_shop'));
      }

      //return view('product.index',compact('product','related_shop', 'related_products_sub_category', 'related_products_shop'));
      return response()->success(compact('product','related_products_sub_category', 'related_products_shop'));
    }

}
