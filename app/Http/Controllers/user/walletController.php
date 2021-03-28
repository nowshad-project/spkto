<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class walletController extends Controller
{
    public function show_Wallet()
    {
    	return view('user.show_Wallet');
    }
}
