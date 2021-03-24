<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class user_notification extends Controller
{
    public function show_all_notification()
	{
		return view('user.notification');
	}
}
