<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;

use Illuminate\Http\Request;
use App\Subscribe;
use Validate;

class SubscribeController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'email'=>'required|email|unique:subscribes',
        ]);

        $subscriber=new Subscribe;
        $subscriber->email=$request->email;
        $subscriber->save();
        Toastr::success("You Successfully Added to our suscriber List!!", 'success');

          return redirect()->back();
    }
}
