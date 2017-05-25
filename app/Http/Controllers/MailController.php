<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;
use App\User;
use Validator;
use Image;
use App\Picture;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class MailController extends Controller
{
    //

     public function __construct()
    {
        $this->middleware('auth');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            
            'subject' => 'required|max:150',
            'emailto' => 'required|email|max:255',
            'message' => 'required|max:750'
            
        ]);
    }

    public function admin_mails_user(Request $request)
    {
        //Check Validation
        $data=$request->all();

        if(Auth::user()->is_admin)
    	{
	        $validate = validator($data);

	        if ($validate->fails()) {
	            return back()
	                        ->withErrors($validate)
	                        ->withInput();
	        }

	        $user = User::where('email',$data['emailto'])->firstOrFail();

	        Mail::send('auth.emails.general_admin', ['user' => $user, 'messagebody' => $data['message'], 'from' => Auth::user(), 'pathToImage'=>public_path()."/bower_components/AdminLTE/dist/img/iyf_logo.jpg"], function ($m) use ($user) {
	            $m->from('Admin@iyfkol.com', 'Admin');

	            $m->subject(Input::get('subject'));

	            $m->to( Input::get('emailto') ,$user->firstname);

	        });
	        return back()->with('success','Successfuly Mailed to '.$data['emailto'].'!');
	    }
	    else
	    {
	    	return back()->with('error','Unauthorized Request!')->withInput();
	    }

    }

    public function user_mails_user(Request $request)
    {
        //Check Validation
        $data=$request->all();

        if($sender=Auth::user())
    	{
	        $validate = validator($data);

	        if ($validate->fails()) {
	            return back()
	                        ->withErrors($validate)
	                        ->withInput();
	        }

	        $user = User::where('email',$data['emailto'])->first();
	        if(!$user)
	        	$user = new User;

	        Mail::send('auth.emails.general_user', ['user' => $user, 'messagebody' => $data['message'], 'from' => Auth::user(), 'pathToImage'=>public_path()."/bower_components/AdminLTE/dist/img/iyf_logo.jpg"], function ($m) use ($user,$sender) {
	            $m->from($sender->email, $sender->firstname);

	            $m->subject(Input::get('subject'));

	            $m->to( Input::get('emailto') ,$user->firstname);

	        });
	        return back()->with('success','Successfuly Mailed to '.$data['emailto'].'!');
	    }
	    else
	    {
	    	return back()->with('error','Unauthorized Request!')->withInput();
	    }

    }
    
}
