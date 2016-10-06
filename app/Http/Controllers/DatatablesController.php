<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Datatables;
use App\User;

class DatatablesController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    
    public function getIndex()
	{
	    return view('edit_database');
	}

	public function anyData()
	{
	    return Datatables::of(User::query())->make(true);
	}
}
