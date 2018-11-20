<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    public function department()
    {
    	return $this->belongsTo('App\Department');
    }
}
