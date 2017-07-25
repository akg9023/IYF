<?php

namespace App;
use DB;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function get_counsellors(){


        // return User::where('type1','counsellor')
        //             ->orderBy('initiated_name','asc')
        //             ->select('id','initiated_name as name')->get();
        return User::where('type1','counsellor')
                    ->orderBy('firstname','asc')
                    ->select('id',DB::raw('CONCAT(firstname, " ", lastname, " ", surname) AS full_name'))->get();
    }

    public static function is_Admin(){

        return \Auth::user()->is_admin;
    }    

    
}
