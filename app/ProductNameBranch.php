<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductNameBranch extends Model
{
    //
    public function productName()
	{
		return $this->belongsTo('App\ProductName');
	}
}
