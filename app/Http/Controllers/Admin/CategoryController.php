<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Carbon\Carbon;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
             'description'=>'required'
           ]);

    $image=$request->file('image');
     $slug=str_slug($request->title);
     if(isset($image))
     {
       $currentData= Carbon::now()->toDateString();
       $imagename=$slug .'-'. $currentData .'-'. uniqid() .'.'.
       $image->getClientOriginalExtension();
       if(!file_exists('uploads/item')){
           mkdir('uploads/item',0777,true);
       }
       $image->move('uploads/item',$imagename);

     }else{
       $imagename='default.png';
       }
           $category=new Category;
           $category->name=$request->name;
           $category->description=$request->description;
           $category->status=$request->status;
           $category ->image= $imagename;
           $category->save();
          return redirect(route('category.index'))->with('successMsg','Category Insert successfully!!');

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
    $category=Category::find($id);
    return view('admin.category.edit',compact('category'));
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
             'description'=>'required'
           ]);

    $category=Category::find($id);

    $image=$request->file('image');
     $slug=str_slug($request->title);
     if(isset($image))
     {
       $currentData= Carbon::now()->toDateString();
       $imagename=$slug .'-'. $currentData .'-'. uniqid() .'.'.
       $image->getClientOriginalExtension();
       if(!file_exists('uploads/item')){
           mkdir('uploads/item',0777,true);
       }
       $image->move('uploads/item',$imagename);

     }else{
       $imagename=$category->image;
       }

           $category->name=$request->name;
           $category->description=$request->description;
           $category ->image= $imagename;
           $category->save();
          return redirect(route('category.index'))->with('successMsg','Category Update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // Category::find($id)->delete();
      //          return redirect(route('category.index'))->with('successMsg','Student Delete successfully ');

      $category= Category::find($id);
      if(file_exists('uploads/item/'.$category->image))
      {
        unlink('uploads/item/'.$category->image);
      }

      $category->delete();
      return redirect()->route('category.index')->with('successMsg','Category Delete successfully!!');


    }


  public function unactive_category($id){
   DB::table('categories')
            ->where('id',$id)
            ->update(['status'=>0]);
             return redirect(route('category.index'))->with('successMsg','Category Unactive successfully!!');

}

public function active_category($id){

    DB::table('categories')
             ->where('id',$id)
             ->update(['status'=>1]);

            return redirect(route('category.index'))->with('successMsg','Category Active successfully!!');

  }







}
