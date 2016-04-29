<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopRating extends Model
{
    //

    public function shop() {

    	return $this->belongsTo('App/Models/Shop');
    }
}
