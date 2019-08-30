<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Http\Controllers\Controller;
use App\Notifications\NewCourseAdd;
use App\Course;
use App\Department;
use App\University;
use App\Subscribe;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::all();
        $departments=Department::all();
        $universities=University::all();
        return view('admin.course.index',compact('courses','departments','universities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $universities=University::all();
       $departments=Department::all();
        return view('admin.course.create',compact('universities','departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

           $course=new Course;
           $course->university_id=$request->university_id;
           $course->department_id=$request->department_id;
           $course->course_fee=$request->course_fee;
           $course->Seat=$request->Seat;
           $course->app_link=$request->app_link;
           $course->apply_process=$request->apply_process;
           $course->requirment=$request->requirment;
           $course->professor=$request->professor;
           $course->financial=$request->financial;
           $course->schoolarship=$request->schoolarship;
           $course->accomodation=$request->accomodation;
           $course->date=$request->date;
           $course->save();

           $subscribers=Subscribe::all();
           foreach($subscribers as $subscriber){
               Notification::route('mail', $subscriber->email)
                     ->notify( New NewCourseAdd ($course));
           }




           return redirect(route('course.index'))->with('successMsg','Course Insert successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course=Course::find($id);
        return view('admin.course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $course=Course::find($id);
      $course->course_fee=$request->course_fee;
      $course->Seat=$request->Seat;
      $course->app_link=$request->app_link;
      $course->apply_process=$request->apply_process;
      $course->requirment=$request->requirment;
      $course->professor=$request->professor;
      $course->financial=$request->financial;
      $course->schoolarship=$request->schoolarship;
      $course->accomodation=$request->accomodation;
      $course->date=$request->date;
      $course->save();


      return redirect(route('course.index'))->with('successMsg','Course Update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $course=Course::find($id);
      $course->delete();
      return redirect()->route('course.index')->with('successMsg','Category Delete successfully!!');
    }
}
