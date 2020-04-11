<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

	public function product()
	{
		return $this->belongsTo('App\Product');
	}

	public function cart()
	{
		return $this->belongsTo('App\Cart');
	}

	public function orderColor()
	{
		return $this->hasMany('App\OrderColor');
	}

	public function orderFont()
	{
		return $this->hasMany('App\OrderFont');
	}
	public function orderOutput()
	{
		return $this->hasMany('App\OrderOutput');
	}
	public function orderStyle()
	{
		return $this->hasMany('App\OrderStyle');
	}
	public function invoices()
	{
		return $this->hasMany('App\OrderStyle');
	}

}
