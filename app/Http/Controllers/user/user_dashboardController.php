<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class user_dashboardController extends Controller
{
    public function dashboard()
    {
    	return view('user.dashboard');
    }
}
