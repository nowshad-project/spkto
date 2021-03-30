<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class scheduleController extends Controller
{
    public function show_schedule_speaker()
    {
    	return view('user.show_schedule_speaker');
    }

    public function show_schedule_student()
    {
    	return view('user.show_schedule_student');
    }
}
