<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
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
}
