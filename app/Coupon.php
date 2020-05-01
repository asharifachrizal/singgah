<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    //

    protected $fillable = [
                        
        'title',        
        'description',
        'percent',        
        'cash',        

    ];
    
    public function invoice()
	{
		return $this->hasMany('App\Invoice');
    }
}
