<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subscribe;
use Brian2694\Toastr\Facades\Toastr;


class SubscriberController extends Controller
{
    public function index(){
      $subscribers=Subscribe::latest()->get();
      return view('admin.subscriber.index',compact('subscribers'));
    }

    public function destory($subscriber){
      $subscriber=Subscribe::findOrFail($subscriber);
      $subscriber->delete();
      Toastr::success('Subscriber successfully Deleted','success');
      return redirect()->back();
    }
}
