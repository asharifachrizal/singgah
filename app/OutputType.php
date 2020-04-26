<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutputType extends Model
{
    //
    public function Cart()
	{
		return $this->belongsTo('App\Cart');
	}
}
