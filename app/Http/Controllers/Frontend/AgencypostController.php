<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Agencyprofile;
use App\Agencypost;

class AgencypostController extends Controller
{
    public function agencycategory(){
      $agencyoffer = Agencyprofile::all();
        return view('frontend.homepage',compact('agencyoffer'));
}
}
