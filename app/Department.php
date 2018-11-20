<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function activity()
    {
    	return $this->hasMany('App\Activity');
    }

    public function faqs()
    {
    	return $this->hasMany('App\Faqs');
    }

    public function leaders()
    {
    	return $this->hasMany('App\Leader');
    }
}
