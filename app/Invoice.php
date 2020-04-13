<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    public function cart()
	{
		return $this->belongsTo('App\Order');
    }
}
