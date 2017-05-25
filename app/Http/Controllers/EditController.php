<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Center;	
use Validator;
use Image;
use App\Picture;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class EditController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'surname' => 'required_without:lastname|max:255',
            'firstname' => 'required|max:255',
            'lastname' => 'required_without:surname|max:255',
            'birthday' => 'required|date',
            'primary_mobile'  => 'required|digits:10',
            'secondary_mobile' => 'digits:10',
            'whatsapp' => 'digits:10',
            'fb_email' => 'max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:5|confirmed',
            'per_district' => 'required_with:per_pincode',
            'cur_district' => 'required_with:cur_pincode',
            'office_district' => 'required_with:office_pincode',
        ]);
    }

    public function update_info(User $user, array $data)
    {
    	if(Input::hasFile('profile_pic')){
	        $file = Input::file('profile_pic');
	        $img = Image::make($file)->resize(160, 160);
	        Response::make($img->encode('jpeg'));
	        }
	        else
	            $img=$user->profile_pic;

        	$user->update([
	            'surname' => $data['surname'],
	            'firstname' => $data['firstname'],
	            'lastname' => $data['lastname'],
	            'initiated_name'=> $data['initiated_name'],
	            'email' => $data['email'],
	            'birthday' => $data['birthday'],
	            'primary_mobile' => $data['primary_mobile'],
	            'secondary_mobile' => $data['secondary_mobile'],
	            'whatsapp' => $data['whatsapp'],
	            'fb_email' => $data['fb_email'],

	            'college_name' => $data['college_name'],
	            'course' => $data['course'],
	            'department' => $data['department'],
	            'period_from' => $data['period_from'],
	            'period_to' => $data['period_to'],

	            'per_addr' => $data['per_addr'],
	            'per_city' => $data['per_city'],
	            'per_pincode' => $data['per_pincode'],
	            'per_district' => $data['per_district'],
	            'per_state' => $data['per_state'],
	            'per_postoffice' => array_has($data,'per_postoffice')? $data['per_postoffice']:null,

	            'current_status' => $data['current_status'],
	            //Studying
	            'staying_at' => $data['staying_at'],

	            //if check and fill in current address

	            //Working
	            'cur_addr' => $data['cur_addr'],
	            'cur_city' => $data['cur_city'],
	            'cur_pincode' => $data['cur_pincode'],
	            'cur_district' => $data['cur_district'],
	            'cur_state' => $data['cur_state'],
	            'cur_postoffice' => array_has($data,'cur_postoffice')? $data['cur_postoffice']:null,

	            'company_name' => $data['company_name'],
	            'company_designation' => $data['company_designation'],

	            'office_addr' => $data['office_addr'],
	            'office_city' => $data['office_city'],
	            'office_pincode' => $data['office_pincode'],
	            'office_district' => $data['office_district'],
	            'office_state' => $data['office_state'],
	            'office_postoffice' => array_has($data,'office_postoffice')?$data['office_postoffice']:null,


	            //center,devoteees
	            'counsellor' => $data['counsellor'],
	            // '' => $data[''],
	            
	            'profile_pic' => $img,
	            // 'password' => bcrypt($data['password'])
        	]);
    }

    public function update_self_info(Request $request)
    {
        //Check Validation
        $data=$request->all();
        $validate = validator($data);

        if ($validate->fails()) {
            return back()
                        ->withErrors($validate)
                        ->withInput();
        }

        $user= User::find($data['id']);

        if(Auth::user()->id == $user->id)
    	{
    		$this->update_info($user,$data);
	        return back()->with('success','Successfuly Updated!');
	    }
	    else
	    {
	    	return back()->with('error','Unauthorized Request!')->withInput();
	    }

    }

    public function update_user_info(Request $request)
    {
        //Check Validation
        $data=$request->all();
        $validate = validator($data);

        if ($validate->fails()) {
            return back()
                        ->withErrors($validate)
                        ->withInput();
        }

        $user= User::findorfail($data['id']);

        if(Auth::user()->is_admin)
    	{
	        $this->update_info($user,$data);
	        $user->update([

	        	'type1' => $data['type1'],//array_has($data,'type1')?$data['type1']:null
            	'password' => $data['password']?bcrypt($data['password']):$user->password,
	            'is_admin' => $data['is_admin'],
	            'comments' => $data['comments']

	        ]);
	        return back()->with('success','Successfuly Updated!');
	    }
	    else
	    {
	    	return back()->with('error','Unauthorized Request!')->withInput();
	    }


    }

	public function delete_user_info($id)
    {
        if(Auth::user()->is_admin)
    	{
    		User::destroy($id);
    		return back()->with('success','Successfuly Deleted!');
	    }
	    else
	    {
	    	return back()->with('error','Unauthorized Request!')->withInput();
	    }
    }

    public function return_update_user_view($id)
    {
        return view('edit_users', ['user'=> User::find($id)]);
    }
        

}
