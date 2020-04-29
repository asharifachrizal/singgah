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

    public function color()
    {
        return $this->hasMany('App\Color');
    }

    public function briefURL()
    {
        return $this->hasMany('App\BriefURL');
    }
    public function briefFile()
    {
        return $this->hasMany('App\BriefFile');
    }
    public function outputType()
    {
        return $this->hasMany('App\OutputType');
    }
    public function targetAudience()
    {
        return $this->hasMany('App\TargetAudience');
    }
    public function style()
    {
        return $this->hasMany('App\Style');
    }
    public function font()
    {
        return $this->hasMany('App\Font');
    }
}
