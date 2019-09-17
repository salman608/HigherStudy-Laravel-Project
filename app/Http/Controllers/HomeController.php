<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agencypost;
use App\Subscribe;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $agencypost_count=Agencypost::all();
        $subscribe_count=Subscribe::all();
        return view('agency.dashboard',compact('agencypost_count','subscribe_count'));
    }
}
