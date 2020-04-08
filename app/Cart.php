<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	protected $fillable = ['user_id', 'status'];

	protected $appends = ['price_subtotal_display'];

	public function getPriceSubtotalDisplayAttribute()
	{
		$priceSubtotal = $this->product->price * $this->quantity;
		$priceSubtotalDisplay = "Rp. " . number_format($priceSubtotal, 0, ',', '.');
    	return $priceSubtotalDisplay;
	}

    public function user()
	{
		return $this->belongsTo('App\User');
	}
}
