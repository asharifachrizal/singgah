<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	protected $fillable = [
        'user_id',
        'invoice_id',
        'product_id',        
        'quantity',
        'orientation',
        'size',
        'duration',
        'target_audience',
        'style',
        'color',
        'color_grading',
        'font',
        'output',
        'deadline',
        'status',        
        'price'

    ];

    public function user()
	{
		return $this->belongsTo('App\User');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function invoice()
    {
        return $this->belongsTo('App\Invoice');
    }
}
