<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use App\Studentapplication;

use App\Student;

class SettingController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth:student');
    }

  public function updateprofile(Request $request){

             $this->validate($request,[

                 'name'=>'required',
                 'email'=>'required|email',

             ]);



             $image=$request->file('image');
             $slug=str_slug($request->name);
             $user=Student::find(Auth::user()->id);
        if(isset($image))
        {
          $currentData= Carbon::now()->toDateString();
          $imageName=$slug .'-'. $currentData .'-'. uniqid() .'.'.
          $image->getClientOriginalExtension();

                  if(!file_exists('uploads/sprofile')){
               mkdir('uploads/sprofile',0777,true);
           }
           $image->move('uploads/sprofile',$imageName);

         }else{
           $imageName=$user->image;
           }
      $user->name=$request->name;
      $user->email=$request->email;
      $user->image=$imageName;
      $user->save();

      Toastr::success('Profile successfully update','success');
      return redirect(route('student'));


    }

    public function updatepassword(Request $request){
      $this->validate($request,[

          'old_password'=>'required',
          'password'=>'required|confirmed',

      ]);

      $hashedPassword=Auth::user()->password;
      if(Hash::check($request->old_password,$hashedPassword)){

          if(!Hash::check($request->password,$hashedPassword)){
              $user=Student::find(Auth::id());
              $user->password=Hash::make($request->password);
              $user->save();
              Toastr::success('Password successfully update','success');
              Auth::logout();
              return redirect(route('student'));

          }else{
              Toastr::error('NewPassword can not be Same','error');
              return redirect()->back();
          }
      }else{
          Toastr::error('Current Password not match','error');
          return redirect()->back();

      }
    }


    public function applyhistory(){


    }
}
