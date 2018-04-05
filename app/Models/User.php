<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table='users';

	public function order()
	{
		return $this->hasMany('App\Models\Order', 'user_id', 'id');
	}
}
?>