<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function department()
    {
    	return $this->belongsTo('App\Department');
    }
}
