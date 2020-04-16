<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	public function category()
	{
		return $this->belongsTo('App\Category');
    }

    public function cart()
	{
		return $this->hasMany('App\Cart');
    }

    public function order()
	{
		return $this->hasMany('App\Order');
    }
}
