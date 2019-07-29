<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function showLoginForm()
    {
      return view('auth.admin-login');
    }

    public function login(Request $request)
    {
      $this->validate($request,[
        'email'  => 'required|email',
        'password'  => 'required|min:8'
      ]);

      if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
      {
        //if successfull then redirect to admin dashboard

            return redirect()->intended(route('adashboard'));
      }

      //if unsuccessfull then return back to admin login page with email
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
      Auth::guard('admin')->logout();
      return redirect(route('admin.login'));
    }

}
