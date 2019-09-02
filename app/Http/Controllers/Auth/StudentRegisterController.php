<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Support\Facades\Hash;

class StudentRegisterController extends Controller
{

  public function showRegistrationForm()
 {
     return view('auth.student-register');
 }

 public function register(Request $request)
 {
    $this->validate($request, [
     'name' => 'required|max:255',
     'email' => 'required|max:255|email',
     'password' => 'required|confirmed|min:8'
    ]);

    $student = new Student;
    $student->name = $request->name;
    $student->email = $request->email;
    $student->password = Hash::make($request->password);
    $student->save();

    return redirect(route('student'));
 }
}
