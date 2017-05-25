<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// ---------------By_Ashish------------------

Route::get('/', function () {
    if(Auth::guest() || !(Auth::user()->is_admin)){
    	return view('welcome');
    }
    return redirect('home');
});

// Route::get('/register',function(){
// 	return view('register');
// });

Route::auth();
//by Ashish
Route::get('send_sms',function(){
	if(Auth::user()->is_admin)
		return view('care.send_sms');
	else
		return redirect('/');
});

Route::get('user/edit_profile','HomeController@edit');
Route::post('/update', 'EditController@update_self_info');

Route::get('/admin/update_user/{id}','EditController@return_update_user_view');
Route::post('/admin/update_user', 'EditController@update_user_info');

Route::get('/admin/update_center/{id}','CentersController@return_update_center_view');
Route::post('/admin/update_center', 'CentersController@update_center_data');


Route::get('/admin/delete_user/{id}','EditController@delete_user_info');

Route::post('/admin/mail_user', 'MailController@admin_mails_user');

Route::post('/user/mail', 'MailController@user_mails_user');

Route::get('/send_emails', 'HomeController@care_mail');

Route::get('/home', 'HomeController@index');

Route::get('/user_info/download/{format}','ExcelController@download_all_users_det');

Route::get('/disqus', function(){
	return view('disqus');
});

Route::get('/user/connect', function(){
	return view('connect');
});

Route::get('user/{id}/profile_pic', 'ImageController@showProfilePic');

Route::get('/call_user',function(){

	if(Auth::guest() || !(Auth::user()->is_admin)){
    	return redirect('/');
    }
		return view('care/calling_user');
});

Route::get('/call_user/call',function(){
		
	// Get the PHP helper library from twilio.com/docs/php/install
	// require_once '/path/to/vendor/autoload.php'; // Loads the library
	// use Twilio\Rest\Client;

	// Your Account Sid and Auth Token from twilio.com/user/account
	$sid = env('TWILIO_ACCOUNT_SID');
	$token = env('TWILIO_AUTH_TOKEN');
	$client = new Client($sid, $token);

	$call = $client->calls->create(
	    "+14155551212", "+14158675309",
	    array("url" => "http://demo.twilio.com/docs/voice.xml")
	);

	echo $call->sid;
});

Route::controller('/admin/edit_database', 'UserDatatablesController', [
    'anyData'  => 'admin/edit_database.data',
    'getIndex' => 'admin/edit_database',
]);


// -------------------By_Mayank------------------

use App\Center;

Route::get('/admin/delete_center/{id}','CentersController@delete_center_info');

Route::get('/center/{id}/center_img', 'ImageController@showCenterImage');
Route::get('/center/{id}/college_logo', 'ImageController@showCollegeLogo');
Route::get('/aboutclg/{id}', function($id){
	return view('aboutclg', ['center'=> Center::find($id)]);
});

Route::controller('/admin/displaycenteraftlogin', 'CenterDatatablesController', [
    'anyData'  => 'admin/displaycenteraftlogin.data',
    'getIndex' => 'admin/displaycenteraftlogin',
]);

Route::get('/insertinitialvaluescenters', function(){
	
	$center = new Center();
	$center->id = 1;
	$center->name = 'IIT KGP';
	$center->addr = 'Near Kharagpur Station';
	$center->city = 'Kharagpur';
	$center->pincode = 841301;
	$center->district = 'Kharagpur';
	$center->postoffice = 'khana chowk';
	$center->state = 'West Bengal';
	$center->save();

	$center = new Center();
	$center->id = 2;
	$center->name = 'NIT durgapur';
	$center->addr = 'Near durgapur Station';
	$center->city = 'Kharagpur';
	$center->pincode = 842251;
	$center->district = 'durgapur';
	$center->postoffice = 'Mana chowk';
	$center->state = 'West Bengal';
	$center->save();

	$center = new Center();
	$center->id = 3;
	$center->name = 'ISM';
	$center->addr = 'Near Dhanbaad Station';
	$center->city = 'Dhanbaad';
	$center->pincode = 834501;
	$center->district = 'Dhanbaad';
	$center->postoffice = 'Jhana chowk';
	$center->state = 'West Bengal';
	$center->save();

	$center = new Center();
	$center->id = 4;
	$center->name = 'HIT';
	$center->addr = 'Near hatiberia';
	$center->city = 'Haldia';
	$center->pincode = 324301;
	$center->district = 'Haldia';
	$center->postoffice = 'makhana chowk';
	$center->state = 'West Bengal';
	$center->save();

	$center = new Center();
	$center->id = 5;
	$center->name = 'Dr BC Roy College';
	$center->addr = 'Durgapur';
	$center->city = 'Durgapur';
	$center->pincode = 841301;
	$center->district = 'Durgapur';
	$center->postoffice = 'khana chowk';
	$center->state = 'West Bengal';
	$center->save();

	$center = new Center();
	$center->id = 6;
	$center->name = 'NIT Jamshedpur';
	$center->addr = 'Near adityapur';
	$center->city = 'Jamshedpur';
	$center->pincode = 841301;
	$center->district = 'Jamshedpur';
	$center->postoffice = 'Adityapur';
	$center->state = 'West Bengal';
	$center->save();

});

// Route::get('/admin/displaycenteraftlogin', function(){
// 	return view('displaycenterpageaftlogin');
// });

Route::get('/displaycenters', function(){
	return view('displaycenters');
});

// -------To be added later-------------
// Route::get('/aboutclg', function(){
// 	return view('aboutclg');
// });

Route::get('/gall', function(){
	return view('gallery');
});

Route::get('/admin/addcenters', function(){
	return view('addcenters');
});

Route::post('/admin/add_center','CentersController@InsertAllDataCenters');

// Route::post('InsertDataCenters','CentersController@InsertAllDataCenters');

Route::get('/events', function(){
	return view('events');
});

Route::get('/admin/addevents', function(){
	return view('addevents');
});


// -------To be added later-------------
// Route::get('/getcenter', function(){
// 	return view('getcenter');
// });