<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
	//
	protected $fillable = [
        'cart_id',
        'value'
	];
    public function Cart()
	{
		return $this->belongsTo('App\Cart');
	}
}
