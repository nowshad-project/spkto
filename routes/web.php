<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Auth
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;

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

//Auth
Route::get('/register', [RegisteredUserController::class, 'create'])
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');

//Dashboard
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
			Route::post('profile-picture-store', [user_infoController::class, 'profile_picture_update']);

			//notification
			Route::get('notification', [user_notification::class, 'show_all_notification']);

			//update password
			Route::get('update-password', [user_infoController::class, 'show_password_update']);
			Route::post('update-password-submit', [UpdateUserPassword::class, 'update']);

		/*} );*/
} );


