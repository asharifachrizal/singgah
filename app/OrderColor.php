<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderColor extends Model
{
    //
    public function order()
	{
		return $this->belongsTo('App\Order');
    }
    
}
