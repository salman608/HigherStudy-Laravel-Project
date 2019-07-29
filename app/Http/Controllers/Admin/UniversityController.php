<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Country;
use App\University;
use Carbon\Carbon;
use DB;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universities=University::all();
        return view('admin.university.index',compact('universities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $country=Country::where('status',1)->get();
      return view('admin.university.create',compact('country'));
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
             'rank'=>'required',
           ]);

    $image=$request->file('image');
     $slug=str_slug($request->title);
     if(isset($image))
     {
       $currentData= Carbon::now()->toDateString();
       $imagename=$slug .'-'. $currentData .'-'. uniqid() .'.'.
       $image->getClientOriginalExtension();
       if(!file_exists('uploads/university')){
           mkdir('uploads/university',0777,true);
       }
       $image->move('uploads/university',$imagename);

     }else{
       $imagename='default.png';
       }
           $university=new University;
           $university->name=$request->name;
           $university->rank=$request->rank;
           $university->status=$request->status;
           $university ->image= $imagename;
           $university->save();


           foreach ($request->country_id as $coun) {
           $university = University::findOrFail($university->id);
           $university->countries()->attach($coun);
         }


          return redirect(route('university.index'))->with('successMsg','University Insert successfully!!');
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
        $university=University::find($id);
        return view('admin.university.edit',compact('university'));
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
             'name'=>'required',
             'rank'=>'required',
           ]);

   $university=University::find($id);

    $image=$request->file('image');
     $slug=str_slug($request->title);
     if(isset($image))
     {
       $currentData= Carbon::now()->toDateString();
       $imagename=$slug .'-'. $currentData .'-'. uniqid() .'.'.
       $image->getClientOriginalExtension();
       if(!file_exists('uploads/university')){
           mkdir('uploads/university',0777,true);
       }
       $image->move('uploads/university',$imagename);

     }else{
       $imagename=$university->image;
       }

           $university->name=$request->name;
           $university->rank=$request->rank;
           $university ->image= $imagename;
           $university->save();




          return redirect(route('university.index'))->with('successMsg','University Update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $university= University::find($id);
      if(file_exists('uploads/university/'.$university->image))
      {
        unlink('uploads/university/'.$university->image);
      }

      $university->delete();
      return redirect()->route('university.index')->with('successMsg','University Delete successfully!!');
    }


    public function unactive_university($id){
     DB::table('universities')
              ->where('id',$id)
              ->update(['status'=>0]);
               return redirect(route('university.index'))->with('successMsg','University Unactive successfully!!');

  }

  public function active_university($id){

      DB::table('universities')
               ->where('id',$id)
               ->update(['status'=>1]);

              return redirect(route('university.index'))->with('successMsg','University Active successfully!!');

    }


}
