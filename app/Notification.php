<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
    protected $fillable = [
        'user_id',
        'notif_type_id',
        'title',
        'value',                
        'status', 
        'created_at'       
        

    ];

    public function user()
	{
		return $this->belongsTo('App\User');
    }
    public function notifType()
	{
		return $this->belongsTo('App\NotifType');
    }
}
