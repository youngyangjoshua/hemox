<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	protected $table='countries';

	public function order()
	{
		return $this->hasMany('App\Models\Order', 'country_id', 'id');
	}
}
?>