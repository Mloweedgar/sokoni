<?php

namespace App\Repositories\AppClasses;

use App\Repositories\Eloquents\BrandRepository as Brand;

class Brands {

  protected $brand;

  public function __construct(Brand $brand) {
    $this->brand = $brand;
  }

  public function getByCategory($id) {

    $brands = $this->brand->getByCategory($id);

    /*
     * Check if brands is not null_get_locale
     */

    if($brands->isEmpty()) {
      return 404;
    } else return $brands;
  }
}
