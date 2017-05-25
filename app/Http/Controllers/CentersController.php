<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Center;
use Auth;
use Image;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use App\Picture;

class CentersController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }

	public function InsertAllDataCenters(Request $request)
	{
		
		$data=$request->all();

		if(Auth::user()->is_admin)
    	{
			
			if(Input::hasFile('center_img')){
	        $file = Input::file('center_img');
	        $center_img = Image::make($file)->resize(300, 300);
	        Response::make($center_img->encode('jpeg'));
	        }
	        else
	            $center_img=null;

	        if(Input::hasFile('college_logo')){
	        $file = Input::file('college_logo');
	        $college_img = Image::make($file)->resize(300, 300);
	        Response::make($college_img->encode('jpeg'));
	        }
	        else
	            $college_img=$user->null;

			$center = new Center;
			$center->name = $data['name'];  
			$center->addr = $data['addr'];  
			$center->city = $data['city'];  
			$center->pincode = $data['pincode'];  
			$center->district = $data['district'];  
			$center->postoffice = $data['postoffice'];
			$center->state = $data['state'];
			$center->description = $data['description'];
			$center->no_of_members = $data['no_of_members'];
			$center->college_logo = $college_img;
			$center->center_img = $center_img;
			$center->save();

			return back()->with('success','Successfuly Added!');
	    }
	    else
	    {
	    	return back()->with('error','Unauthorized Request!')->withInput();
	    }

	}

	public function update_center_data(Request $request)
	{
		$data=$request->all();

		if(Auth::user()->is_admin)
    	{
			
			$center = Center::find($data['id']);

			if(Input::hasFile('center_img')){
	        $file = Input::file('center_img');
	        $center_img = Image::make($file)->resize(300, 300);
	        Response::make($center_img->encode('jpeg'));
	        }
	        else
	            $center_img=$center->center_img;

	        if(Input::hasFile('college_logo')){
	        $file = Input::file('college_logo');
	        $college_img = Image::make($file)->resize(300, 300);
	        Response::make($college_img->encode('jpeg'));
	        }
	        else
	            $college_img=$center->college_logo;

			
			$center->name = $data['name'];  
			$center->addr = $data['addr'];  
			$center->city = $data['city'];  
			$center->pincode = $data['pincode'];  
			$center->district = $data['district'];  
			$center->postoffice = $data['postoffice'];
			$center->state = $data['state'];
			$center->description = $data['description'];
			$center->no_of_members = $data['no_of_members'];
			$center->college_logo = $college_img;
			$center->center_img = $center_img;
			$center->save();

			return back()->with('success','Successfuly Updated!');
	    }
	    else
	    {
	    	return back()->with('error','Unauthorized Request!')->withInput();
	    }
	} 
	  
	public function return_update_center_view($id)
    {
        return view('update_center', ['center'=> Center::find($id)]);
    }

    public function delete_center_info($id)
    {
        if(Auth::user()->is_admin)
    	{
    		Center::destroy($id);
    		return back()->with('success','Successfuly Deleted!');
	    }
	    else
	    {
	    	return back()->with('error','Unauthorized Request!')->withInput();
	    }
    }
}
