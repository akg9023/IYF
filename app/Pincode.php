<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pincode extends Model
{
    //

    public function users(string $type)
    {
    	return $this->hasMany(User::class,'id', $type.'_pin_id');
    }
}
