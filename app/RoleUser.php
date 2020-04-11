<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    //
    public function Role()
	{
		return $this->belongsTo('App\Role');
    }
    public function User()
	{
		return $this->belongsTo('App\User');
    }
}
