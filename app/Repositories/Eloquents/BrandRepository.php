<?php

namespace App\Repositories\Eloquents;

use App\Models\Brand;

class BrandRepository {

  public function getByCategory($id) {

    return Brand::where('sub_category_id', '=', $id)->get(['id','name', 'sub_category_id']);
  }
}
