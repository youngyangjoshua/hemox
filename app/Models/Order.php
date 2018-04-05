<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table='orders';

	public function user()
	{
		return $this->belongsTo('App\Models\User', 'user_id', 'id');
	}

	public function country()
	{
		return $this->belongsTo('App\Models\Country', 'country_id', 'id');
	}

	public function promo_code()
	{
		return $this->belongsTo('App\Models\Promo_Code', 'promo_code_id', 'id');
	}

	public function product()
	{
		return $this->belongsToMany('App\Models\Product', 'Product_Order', 'order_id', 'product_id');
	}
}
?>