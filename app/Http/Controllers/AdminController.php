<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;
use App\Country;
use App\AgencyProfile;
use App\Student;
use App\Department;
use App\Course;
use App\Subscribe;
use App\Contact;

class AdminController extends Controller
{
  public function __construct(){

    $this->middleware('auth:admin');

  }
   public function index()
   {
     $university_count=University::all();
     $country_count=Country::all();
     $agency_count=AgencyProfile::all();
     $student_view=Student::all();
     $dept_count=Department::all();
     $course_count=Course::all();
     $subscribe_count=Subscribe::all();
     $message_count=Contact::all();
     return view('admin.dashboard',compact('university_count','country_count','agency_count','student_view','dept_count','course_count','subscribe_count','message_count'));
   }
}
