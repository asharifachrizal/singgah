<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductName extends Model
{
    //
    public function product()
	{
		return $this->hasMany('App\Product');
    }
    
    public function branch()
	{
		return $this->hasMany('App\ProductNameBranch');
	}

	public function category()
	{
		return $this->belongsTo('App\Category');
    }
}
