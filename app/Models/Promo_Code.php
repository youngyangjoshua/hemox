<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo_Code extends Model
{
	protected $table='promo_codes';

	public function order()
	{
		return $this->hasMany('App\Models\Order', 'promo_code_id', 'id');
	}
}
?>