<?php

namespace App\Http\Controllers\Agency;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AgencyProfile;
use Carbon\Carbon;

class AgencyprofileContriller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $agencyprofiles=AgencyProfile::all();
       return view('agency.agencyprofile.index',compact('agencyprofiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('agency.profile.create');
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
        'title'=>'required',
        'subtitle'=>'required',
        'address'=>'required',
        'phone'=>'required',
        'facebook'=>'required'
        'image' =>'required'

      ]);



    $image=$request->file('image');
     $slug=str_slug($request->title);
     if(isset($image))
     {
       $currentData= Carbon::now()->toDateString();
       $imagename=$slug .'-'. $currentData .'-'. uniqid() .'.'.
       $image->getClientOriginalExtension();
       if(!file_exists('uploads/agency')){
           mkdir('uploads/agency',0777,true);
       }
       $image->move('uploads/agency',$imagename);

     }else{
       $imagename='default.png';
       }
           $agencyprofile= new AgencyProfile();
           $agencyprofile->title=$request->title;
           $agencyprofile->subtitle=$request->subtitle;
           $agencyprofile->email=$request->email;
           $agencyprofile->address=$request->address;
           $agencyprofile->phone=$request->phone;
           $agencyprofile->website=$request->website;
           $agencyprofile->facebook=$request->facebook;
           $agencyprofile->twiter=$request->twiter;
           $agencyprofile->description=$request->description;
           $agencyprofile ->image= $imagename;
           $agencyprofile->save();
          return redirect(route('agencyprofile.index'))->with('successMsg','Agencyprofile Insert successfully!!');

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
