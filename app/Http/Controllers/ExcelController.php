<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Excel;

use App\User;

use Illuminate\Support\Facades\Redirect;

class ExcelController extends Controller
{
    //

    public function download_all_users_det($format)
    {
       	$mytime = \Carbon\Carbon::now();
		$mytime->toDateTimeString();
		Excel::create('Users_list_as_on_'. $mytime, function($excel) {

	            // Set the title
	            $excel->setTitle('Users registered in IYF details');

	            // Chain the setters
	            $excel->setCreator('Ashish')->setCompany('IYF KOL');

	            $excel->setDescription('B. tech. final year project');

	            $user = User::all();

	            //$data = [12,"Hey",123,4234,5632435,"Nope",345,345,345,345];

	            $excel->sheet('Sheet 1', function ($sheet) use ($user) {
	                $sheet->setOrientation('landscape');
	                $sheet->fromModel($user, NULL, 'A4',true);
	            });

	        })->download($format);

		return back()->with('success','Successfuly downloaded '.$format .' file!');
	}

}
