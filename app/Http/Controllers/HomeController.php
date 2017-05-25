<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->is_admin)
            return view('dashboard');
        
        return back()->with('error','Unauthorized Request!')->withInput();
    }

    public function edit()
    {
        return view('edit');
    }

    public function care_mail()
    {
        return view('care.mail');
    }
    
    public function care_call()
    {
        return view('care.mail');
    }
}