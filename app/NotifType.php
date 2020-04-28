<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotifType extends Model
{
    //        
    public function Notification()
	{
		return $this->hasMany('App\Notification');
    }
}
