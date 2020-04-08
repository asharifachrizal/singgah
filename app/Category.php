<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   
	public function productName()
	{
		return $this->hasMany('App\ProductName');
	}
}
