<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//user
use App\Http\Controllers\user\user_infoController;
use App\Http\Controllers\user\user_dashboardController;
use App\Http\Controllers\user\user_notification;
use App\Actions\Fortify\user\UpdateUserPassword;

/*
|--------------------------------------------------------------------------
| Web Routes 
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');*/


Route::get('/', function () {
    return view('frontend.home');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 
	function () {
		if (Auth::user()->role_id=='1') {
			return redirect('/admin/dashboard');
		}
		elseif (Auth::user()->role_id=='2') {
			return redirect('/');
		}
		else{
			return redirect('/');
		}
})->name('dashboard');

//admin route
Route::group(['prefix' => 'admin' ,'middleware' =>['auth:sanctum','verified', 'admin']], function (){

	//Dashboard
	Route::get('dashboard', function () { return view('admin.dashboard'); })->name('admin.dashboard');

} );


//user route
Route::group(['prefix' => 'user' ,'middleware' =>['auth:sanctum','verified', 'user']], function (){


		//user_info
		Route::get('about', [user_infoController::class, 'show_user_info_from']);
		//Route::post('regestration-submit', [regestrationController::class, 'submit_reg_form']);

		/*Route::group([ 'middleware' =>['user_info']], function (){*/
			//Dashboard*/
			//Route::get('dashboard',[user_dashboardController::class, 'dashboard'] )->name('dashboard');
			//update profile picture
			Route::get('update-profile-picture', [user_infoController::class, 'show_profile_picture_update']);
			//notification
			Route::get('notification', [user_notification::class, 'show_all_notification']);

			//update password
			Route::get('update-password', [user_infoController::class, 'show_password_update']);
			Route::post('update-password-submit', [UpdateUserPassword::class, 'update']);

		/*} );*/
} );


