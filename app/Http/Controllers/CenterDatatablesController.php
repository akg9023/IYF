<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CenterDatatablesController extends Controller
{
    //

	public function __construct()
    {
        $this->middleware('auth');
    }


    public function getIndex()
	{
	    return view('displaycenterpageaftlogin');
	}

	public function anyData()
	{
	    return Datatables::of(Center::query())->make(true);
	}
}
