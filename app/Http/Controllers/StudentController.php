<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studentapplication;
use App\Agencyprofile;
use Auth;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:student');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function student()
    {
      $hi=Studentapplication::where('user_id',Auth::user()->id)->get();
      return view('frontend.student',compact('hi'));
    }
}
