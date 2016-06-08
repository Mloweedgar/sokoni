<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Http\Controllers\Shop\ShopController as Shop;

class HomeController extends Controller
{

    protected $shop;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Shop $shop)
    {
        //$this->middleware('auth');
        $this->shop = $shop;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop_list = $this->shop->getShopList();

        return view('home.home', compact('shop_list'));
    }
}
