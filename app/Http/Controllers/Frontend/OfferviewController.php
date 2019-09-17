<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Agencyprofile;
use App\Agencypost;
use App\User;
use Illuminate\Support\Facades\Session;
use Auth;

class OfferviewController extends Controller
{
  public function categoryByPost($id){

     $agencyoffer=Agencyprofile::where('user_id',$id)->first();
     $agencypost = Agencypost::where('user_id',$id)->get();
     $user = User::where('id',$id)->first();

    return view('frontend.offerview',compact('agencypost','agencyoffer','user'));
    }

    




}
