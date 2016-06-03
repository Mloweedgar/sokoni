<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;

use App\Repositories\AppClasses\Brands;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;

class ProductBrandController extends Controller
{
    protected $brand;
    protected $request;

    public function __construct(Brands $brand, Request $request) {
      $this->brand = $brand;
      $this->request = $request;
    }

    public function getByCategoryId($id) {

      $brands = $this->brand->getByCategory($id);

      return Response::json($brands);



    }

}
