<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CheckOutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function checkout(Request $request)
    {	
    	$product_id = $request->product_id;
		$product_quantity = $request->product_quantity;
		$status = 'success';
  		$result['product_id'] = $product_id;
  		$result['product_quantity'] = $product_quantity;
  		$redirect=route('view_checkout', ['product_id'=>$product_id, 'product_quantity'=>$product_quantity]);
  		LOG::INFO($redirect);

  		return response()->json( ['status'=>$status, 'result'=>$result, 'redirect'=>$redirect]);
		// LOG::INFO($product_id);
		// LOG::INFO($product_quantity);
        // return view('checkout',['product_id'=>$product_id, 'product_quantity'=>$product_quantity]);
        // return view('home',['products'=>$products, 'product_orders'=>$product_orders]);
    }

    public function view_checkout($product_id,$product_quantity){
    	
    	return view('checkout',['product_id'=>$product_id, 'product_quantity'=>$product_quantity]);
    	
    	
    }
}
?>