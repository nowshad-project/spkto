<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class scheduleController extends Controller
{
    public function show_schedule()
    {
    	return view('user.show_schedule');
    }
}
