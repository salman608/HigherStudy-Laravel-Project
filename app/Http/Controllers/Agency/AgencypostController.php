<?php

namespace App\Http\Controllers\Agency;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Agencypost;
use Carbon\Carbon;
use Auth;

class AgencypostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $agencyposts=Agencypost::where('user_id', Auth::user()->id)->get();
        return view('agency.agencypost.index',compact('agencyposts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agency.agencypost.create');
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
        'country'=>'required',
        'university'=>'required',
        'requirment'=>'required',
        'facilities'=>'required',
        'description'=>'required'


      ]);

      $image=$request->file('image');
       $slug=str_slug($request->title);
       if(isset($image))
       {
         $currentData= Carbon::now()->toDateString();
         $imagename=$slug .'-'. $currentData .'-'. uniqid() .'.'.
         $image->getClientOriginalExtension();
         if(!file_exists('uploads/agencypost')){
             mkdir('uploads/agencypost',0777,true);
         }
         $image->move('uploads/agencypost',$imagename);

       }else{
         $imagename='default.png';
         }



           $agencypost= new Agencypost();
           $agencypost->user_id=Auth::user()->id;
           $agencypost->country=$request->country;
           $agencypost->university=$request->university;
           $agencypost->requirment=$request->requirment;
           $agencypost->facilities=$request->facilities;
           $agencypost->description=$request->description;
           $agencypost->image= $imagename;
           $agencypost->status=$request->status;
           $agencypost->save();
          return redirect(route('agencypost.create'))->with('successMsg','Agencypost Insert successfully!!');
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
        $agencypost=Agencypost::find($id);
        return view('agency.agencypost.edit',compact('agencypost'));
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
      $this->validate($request,[
        'country'=>'required',
        'university'=>'required',
        'requirment'=>'required',
        'facilities'=>'required',
        'description'=>'required'


      ]);

      $agencypost=Agencypost::find($id);

      $image=$request->file('image');
       $slug=str_slug($request->title);
       if(isset($image))
       {
         $currentData= Carbon::now()->toDateString();
         $imagename=$slug .'-'. $currentData .'-'. uniqid() .'.'.
         $image->getClientOriginalExtension();
         if(!file_exists('uploads/agencypost')){
             mkdir('uploads/agencypost',0777,true);
         }
         $image->move('uploads/agencypost',$imagename);

       }else{
         $imagename=$agencypost->image;
         }




           $agencypost->country=$request->country;
           $agencypost->university=$request->university;
           $agencypost->requirment=$request->requirment;
           $agencypost->facilities=$request->facilities;
           $agencypost->description=$request->description;
           $agencypost->image= $imagename;

           $agencypost->save();
          return redirect(route('agencypost.index'))->with('successMsg','Agencypost Update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $agencypost= Agencypost::find($id);
      if(file_exists('uploads/agencypost/'.$agencypost->image))
      {
        unlink('uploads/agencypost/'.$agencypost->image);
      }

      $agencypost->delete();
      return redirect()->route('agencypost.index')->with('successMsg','AgencyPost Delete successfully!!');
    }
}
