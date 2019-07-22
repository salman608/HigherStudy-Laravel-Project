<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\University;
use App\Country;
use App\Department;

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
       $university = University::findOrFail($id);
       return view('frontend.department',compact('university'));
    }



}
