<?php

namespace App\Http\Controllers\Agency;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Studentapplication;

class Studentapply extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $studentapplays=Studentapplication::all();
          return view('agency.studentapply.index',compact('studentapplays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agency.studentapply.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
          'name'=>'required',
          'email'=>'required',
          'address'=>'required',
          'mobile'=>'required',
          's_degree'=>'required',
          's_year'=>'required',
          'h_degree'=>'required',
          'h_year'=>'required',
          'g_degree'=>'required',
          'g_year'=>'required',
          'm_degree'=>'required',
          'm_year'=>'required',
          'i_score'=>'required',
          'i_year'=>'required'
        ]);

        $studentapplay= new Studentapplication;
        $studentapplay->name=$request->name;
        $studentapplay->email=$request->email;
        $studentapplay->mobile=$request->mobile;
        $studentapplay->address=$request->address;
        $studentapplay->birth=$request->birth;
        $studentapplay->s_degree=$request->s_degree;
        $studentapplay->s_year=$request->s_year;
        $studentapplay->s_gpa=$request->s_gpa;
        $studentapplay->h_degree=$request->h_degree;
        $studentapplay->h_year=$request->h_year;
        $studentapplay->h_gpa=$request->h_gpa;
        $studentapplay->g_degree=$request->g_degree;
        $studentapplay->g_year=$request->g_year;
        $studentapplay->g_gpa=$request->g_cgpa;
        $studentapplay->m_degree=$request->m_degree;
        $studentapplay->m_year=$request->m_year;
        $studentapplay->m_gpa=$request->m_cgpa;
        $studentapplay->ielts=$request->ielts;
        $studentapplay->i_year=$request->i_year;
        $studentapplay->i_score=$request->i_score;
        $studentapplay->country=$request->country;
        $studentapplay->preferdegree=$request->preferdegree;
        $studentapplay->save();

        return redirect(route('agencypost'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
