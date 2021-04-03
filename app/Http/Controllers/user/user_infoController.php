<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use DB;
use Session;

class user_infoController extends Controller
{ 
  //profile picture
	public function show_profile_picture_update()
	{
		return view('user.profile_picture_update');
	}
	public function profile_picture_update(Request $request)
    {
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,JPEG,PNG,JPG|max:2048',
        ]);
    
        $imageName = time().'.'.$request->profile_picture->extension();
         
        if(file_exists('storage/'.Auth::user()->profile_photo_path)){
          unlink('storage/'.Auth::user()->profile_photo_path);
        }
        
		$path='profile-photos/'; 
        $request->profile_picture->move(public_path('storage/'.$path), $imageName);
  
        /* Store $imageName name in DATABASE from HERE */
        $data['profile_photo_path']=$path.$imageName;
        $data['updated_at']=date('y-m-d H:i:s');

        DB::table('users')
        ->where('id','=',Auth::user()->id)
        ->update($data);

        Session::put('success','Profile picture update successfully.');

        return Redirect('/user/update-profile-picture');
    }

  //about 
	public function show_user_info_from()
	{
		return view('user.user_info_from');
	}
  public function submit_reg_form(Request $request)
  {
    $this->validate($request, [
           'name' => 'required',
           'language' => 'required',
           'gender' => 'required',
           'date_of_birth' => 'required',
           'country' => 'required',
           'd_topic' => 'required',
       ]);
    echo $request->name;
    echo $request->language;
    echo $request->gender;
    echo $request->date_of_birth;
    echo $request->country;
    echo $request->d_topic;
    if($request->is_receiving_payment)
    {
      $this->validate($request, [
           'HourlyRate' => 'required',

           'Saturday' => 'required',
           'Sunday' => 'required',
           'Monday' => 'required',
           'Tuesday' => 'required',
           'Wednesday' => 'required',
           'Thursday' => 'required',
           'Friday' => 'required',
       ]);
      echo $request->HourlyRate;
      echo $request->Saturday;
      echo $request->Sunday;
      echo $request->Monday;
      echo $request->Tuesday;
      echo $request->Wednesday;
      echo $request->Thursday;
      echo $request->Friday;
    }
  }



  //password update
	public function show_password_update()
	{
		return view('user.update_password');
	}
	public function updatePassword(Request $request)
    {
       $this->validate($request, [
           'currentPassword' => 'required',
           'password' => 'required|confirmed',
       ]);
       $user = Auth::user();
       $hashedPassword = $user->password;
       if (Hash::check($request->currentPassword, $hashedPassword)) {
            if (!Hash::check($request->password, $hashedPassword)) {
                $user->update([
                   'password' => Hash::make($request->password)
                ]);
                return redirect('/login');
            } else {
				    Session::put('password','New Password can not be as Old Password');              
            }
       } else {
       		Session::put('currentPassword','Current Password did not Matched!');
       	}
        return back();
    }
}
