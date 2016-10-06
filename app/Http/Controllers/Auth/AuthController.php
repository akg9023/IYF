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
use App\Pincode;

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
            'bdate' => 'required|date',
            'mob1'  => 'required|digits:10',
            'mob2' => 'integer|digits:10',
            'whatsapp' => 'integer|digits:10',
            'fb_email' => 'max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
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
        if(Input::hasFile('image')){
        $file = Input::file('image');
        $img = Image::make($file)->resize(160, 160);
        Response::make($img->encode('jpeg'));
        }
        else
            $img=null;

        return User::create([
            'surname' => $data['surname'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'bdate' => $data['bdate'],
            'mob1' => $data['mob1'],
            'mob2' => $data['mob2'],
            'whatsapp' => $data['whatsapp'],
            'fb_email' => $data['fb_email'],
            'college_name' => $data['college_name'],
            'period_from' => $data['period_from'],
            'period_to' => $data['period_to'],
            // 'connected_center' => $data['connected_center'],
            // 'connected_devotee' => $data['connected_devotee'],
            'per_addr' => $data['per_addr'],
            'per_pin_id'=> Pincode::where(['pincode'=>$data['per_pin'],'city/town'=>$data['per_city'],'postoffice'=>$data['per_postoffice']])->first()->id,
            'image' => $img,
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);
    }
}
