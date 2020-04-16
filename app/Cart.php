<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	protected $fillable = [
        'user_id',
        'product_id',
        'product_name',
        'quantity',
        'orientation',
        'size',
        'duration',
        'target_audience',
        'deadline',
        'pattern',
        'style',
        'kind',
        'output',
        'tone',
        'brief',
        'status'

    ];
        public function user()
	{
		return $this->belongsTo('App\User');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
