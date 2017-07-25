<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Image;
use App\Picture;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
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

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        if(Input::hasFile('profile_pic')){
        $file = Input::file('profile_pic');
        $img = Image::make($file)->resize(160, 160);
        Response::make($img->encode('jpeg'));
        }
        else
            $img=null;

        return User::create([
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
            'password' => bcrypt($data['password'])
        ]);
    }
}
