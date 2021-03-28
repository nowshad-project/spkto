<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class courseController extends Controller
{
	public function show_create_course()
	{
		return view('user.show_create_course');
	}
	
    public function show_my_course()
	{
		return view('user.show_my_course');
	}
}
