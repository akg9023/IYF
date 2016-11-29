<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pincode extends Model
{
    //
    protected $fillable = [
    	'pincode','city','state','postoffice',
    ];

    public $timestamps = false;

    public function users(string $type)
    {
    	return $this->hasMany(User::class,'id', $type.'_pin_id');
    }
}
