<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        $product_orders = Product_Order::get();
        //$products = Product::with('brand')->get();
        // $item="";
        // foreach ($products as $product) {
        //     $item = $item." ".$product->name;
        // }
        //LOG::INFO($product->name);
        // $test = 'test';
        // dd($test);
        return view('home',['products'=>$products, 'product_orders'=>$product_orders]);
    }

    // public function checkout()
    // {
    //     return view('checkout');
    // }

    public function order()
    {
        return "order test";
    }
}
