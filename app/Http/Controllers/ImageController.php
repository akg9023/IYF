<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Center;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Image;

class ImageController extends Controller
{
    //
    public function showProfilePic($id)
    {
        $user = User::findOrFail($id);
        $pic = Image::make($user->profile_pic?$user->profile_pic:asset('\bower_components\AdminLTE\dist\img\avatar.png'));

        $response = Response::make($pic->encode('jpeg'));

        //setting content-type
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }

    public function showCollegeLogo($id)
    {
        $center = Center::findOrFail($id);
        $pic = Image::make($center->college_logo?$center->college_logo:asset('\assets\images\no_img.jpg'));

        $response = Response::make($pic->encode('jpeg'));

        //setting content-type
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }

    public function showCenterImage($id)
    {
        $center = Center::findOrFail($id);
        $pic = Image::make($center->center_img?$center->center_img:asset('\assets\images\no_img.jpg'));

        $response = Response::make($pic->encode('jpeg'));

        //setting content-type
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }    
}
