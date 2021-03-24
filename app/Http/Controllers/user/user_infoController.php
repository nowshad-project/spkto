<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class user_infoController extends Controller
{ 

	public function show_profile_picture_update()
	{
		return view('user.profile_picture_update');
	}

	public function show_user_info_from()
	{
		return view('user.user_info_from');
	}

	public function show_password_update()
	{
		return view('user.update_password');
	}
}
