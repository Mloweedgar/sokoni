<?php

namespace App\Repositories\AppClasses;

class Products {

  public function __construct() {


  }

  public function getAll() {

    /*
     * Organize the list into 3x3 array for slider display
     */
    $i = $j = 1;

    foreach ($this->shop->allShops() as $value) {

      if($j == 4) {

        $i++;
        $j = 1;
      }

      $shop_array[$i][$j]['id'] = $value->id;
      $shop_array[$i][$j]['shop_name'] = $value->shop_name;


      $j++;


    }

    return $shop_array;
  }
}
