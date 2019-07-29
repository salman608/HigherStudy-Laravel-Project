<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Country;
use Carbon\Carbon;
use DB;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries=Country::all();
        return view('admin.country.index',compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $category=Category::where('status',1)->get();
          return view('admin.country.create',compact('category'));
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
           ]);

    $image=$request->file('image');
     $slug=str_slug($request->title);
     if(isset($image))
     {
       $currentData= Carbon::now()->toDateString();
       $imagename=$slug .'-'. $currentData .'-'. uniqid() .'.'.
       $image->getClientOriginalExtension();
       if(!file_exists('uploads/country')){
           mkdir('uploads/country',0777,true);
       }
       $image->move('uploads/country',$imagename);

     }else{
       $imagename='default.png';
       }
           $country=new Country;
           $country->name=$request->name;
           $country->status=$request->status;
           $country ->image= $imagename;
           $country->save();

           foreach ($request->category_id as $cat) {

           $country =Country::findOrFail($country->id);

           $country->categories()->attach($cat);
          }


          return redirect(route('country.index'))->with('successMsg','Country Insert successfully!!');
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
      $country=Country::find($id);
      $category=Category::all();
      return view('admin.country.edit',compact('country','category'));
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
           ]);

           $country=Country::find($id);

    $image=$request->file('image');
     $slug=str_slug($request->title);
     if(isset($image))
     {
       $currentData= Carbon::now()->toDateString();
       $imagename=$slug .'-'. $currentData .'-'. uniqid() .'.'.
       $image->getClientOriginalExtension();
       if(!file_exists('uploads/country')){
           mkdir('uploads/country',0777,true);
       }
       $image->move('uploads/country',$imagename);

     }else{
       $imagename=$country->image;
       }

           $country->name=$request->name;
           $country ->image= $imagename;
           $country->save();

           


          return redirect(route('country.index'))->with('successMsg','Country Update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $country= Country::find($id);
      if(file_exists('uploads/country/'.$country->image))
      {
        unlink('uploads/country/'.$country->image);
      }

      $country->delete();
      return redirect()->route('country.index')->with('successMsg','Country Delete successfully!!');
    }


    public function unactive_country($id){
     DB::table('countries')
              ->where('id',$id)
              ->update(['status'=>0]);
               return redirect(route('country.index'))->with('successMsg','Country Unactive successfully!!');

  }


  public function active_country($id){

      DB::table('countries')
               ->where('id',$id)
               ->update(['status'=>1]);

              return redirect(route('country.index'))->with('successMsg','Country Active successfully!!');

    }


}
