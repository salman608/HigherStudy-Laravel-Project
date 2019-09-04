<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Category;
use App\University;
use App\Country;
use App\Department;
use App\Course;
use App\Agencyprofile;
use App\Agencypost;
use Auth;


class HomeController extends Controller
{
  public function index(){
    $categories = Category::whereStatus(1)->get();
    $agencyoffer = AgencyProfile::all();
    return view('frontend.homepage',compact('categories','agencyoffer'));
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


    public function agencyoffer(){
      $agencyoffer = AgencyProfile::whereStatus(1)->get();

      return view('frontend.homepage',compact('agencyoffer'));
    }

    public function categoryByPost($id){
        $agencypost = Agencypost::where('user_id',$id)->get();
        $agencyoffer=Agencyprofile::where('user_id',Auth::user()->id)->first();
        return view('frontend.agencyoffer',compact('agencypost','agencyoffer'));
      }

      public function agencypost($id){
          $agencypost = Agencypost::find($id);

          $postcount='post_' .$agencypost->id;
          if (!Session::has($postcount)) {
            $agencypost->increment('view_count');
            Session::put($postcount,1);
          }
          $agencyoffer=Agencyprofile::where('user_id',Auth::user()->id)->first();
          return view('frontend.agencypost',compact('agencypost','agencyoffer'));
        }





}
