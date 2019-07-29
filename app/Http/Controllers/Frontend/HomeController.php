<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\University;
use App\Country;
use App\Department;
use App\Course;

class HomeController extends Controller
{
  public function index(){
    $categories = Category::whereStatus(1)->get();
    return view('frontend.homepage',compact('categories'));
  }



  public function categoryByCountry($id){
    $category = Category::findOrFail($id);
    return view('frontend.country',compact('category'));
  }


  public function countryByUniversity($id){
      $country = Country::findOrFail($id);
      return view('frontend.university',compact('country'));
    }


    public function universityByDepartment($id){
      $uni_id = $id;
       $university = University::findOrFail($id);
       return view('frontend.department',compact('university','uni_id'));
    }


    public function confirmCourse($uni_id, $dep_id){

      $department = Department::findOrFail($dep_id);
      $university = University::findOrFail($uni_id);

      $course = Course::where('university_id', '=', $uni_id)
                      ->where('department_id', '=', $dep_id)
                      ->first();
       return view('frontend.coursedetails',compact('course','department','university'));
    }



    public function agency(){
      return view('layouts.agency');
    }





}
