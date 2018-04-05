<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'products';

	public function brand()
	{
		return $this->belongsTo('App\Models\Brand', 'brand_id', 'id');
	}

	public function order()
	{
		return $this->belongsToMany('App\Models\Order', 'Product_Order', 'product_id', 'order_id');
	}
}
?>