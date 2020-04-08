<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $appends = ['price_display', 'price_before_display'];

	public function getPriceDisplayAttribute()
	{
		$priceDisplay = "Rp. " . number_format($this->price, 0, ',', '.');
    	return $priceDisplay;
	}

	public function getPriceBeforeDisplayAttribute()
	{
		$priceBeforeDisplay = $this->price - ($this->price*20/100);
		if ($priceBeforeDisplay > 999 && $priceBeforeDisplay <= 999999) {
			$priceBeforeDisplay = floor($priceBeforeDisplay / 1000) . 'K';
		} elseif ($priceBeforeDisplay > 999999) {
			$priceBeforeDisplay = floor($priceBeforeDisplay / 1000000) . 'M';
		} else {
			$priceBeforeDisplay = $priceBeforeDisplay;
		}

    	return 'Rp. ' . $priceBeforeDisplay;
	}
	
    public function productImage()
	{
		return $this->hasMany('App\ProductImage');
	}

	public function productName()
	{
		return $this->belongsTo('App\ProductName');
	}
	
	public function cart()
	{
		return $this->belongsTo('App\Cart');
	}

	public function category()
	{
		return $this->belongsTo('App\Category');
	}
}
