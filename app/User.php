<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'surname', 'firstname', 'lastname', 'bdate', 'mob1', 'mob2', 'whatsapp', 'email', 'fb_email', 'college_name', 'period_from','period_to', 'connected_center', 'connected_devotee', 'per_addr', 'per_pin_id', 'image', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pincode($type)
    {
        return $this->belongsTo(Pincode::class , $type.'_pin_id');
    }
}
