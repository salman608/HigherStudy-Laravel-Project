<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\AgencyProfile;
use App\Contact;
use DB;
use App\Http\Controllers\Controller;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $agencyprofiles=AgencyProfile::all();
      return view('admin.agency.index',compact('agencyprofiles'));
    }

    public function contactview(){
       $datas=Contact::latest()->paginate(5);
     return view('layouts.admin_layout',compact('datas'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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







    public function unactive_agencycategory($id){
     DB::table('agencyprofiles')
              ->where('id',$id)
              ->update(['status'=>0]);
               return redirect(route('agencycategory'))->with('successMsg','AgencyCategory Unactive successfully!!');

  }

  public function active_agencycategory($id){

      DB::table('agencyprofiles')
               ->where('id',$id)
               ->update(['status'=>1]);

              return redirect(route('agencycategory'))->with('successMsg','AgencyCategory Active successfully!!');

    }
}
