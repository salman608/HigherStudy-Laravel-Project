@extends('layouts.admin_layout')
@section('admin_content')

<div class="content container-fluid">
            <div class="row">
                <div class="col-xs-12">

                  @if ($errors->any())
  <div class="alert alert-danger">
   <ul>
     @foreach ($errors->all() as $error)
     <li>{{ $error }}</li>
     @endforeach
   </ul>
 </div>
 @endif

 @if(session('successMsg'))

 <div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Well done!</strong> {{session('successMsg')}}

</div>
@endif

                </div>
            </div>

                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card-box">
                             <div class="card-block">
                                <h6 class="card-title text-bold">All Category</h6>

                                 <table class="display datatable table-bordered  table table-stripped">
                                     <thead>
                                         <tr>
                                             <th>CategoryId</th>
                                             <th>CategoryName</th>
                                             <th>CategoryDescription</th>
                                             <th>CategoryImage</th>
                                             <th>Status</th>
                                             <th>Action</th>

                                         </tr>
                                     </thead>
                                     <tbody>
                                       @foreach($categories as $category)
                                         <tr>
                                             <td>{{$category->id}}</td>
                                             <td>{{$category->name}}</td>
                                             <td style="width:350px">{{$category->description}}</td>
                                             <td>
                                                <img src="{{URL::to('uploads/item/'.$category->image)}}"  style="height:80px;width:80px;border-radius: 50%;">

                                             </td>

                                             <td>
                                               active

                                             </td>


                                         </tr>
                                         @endforeach

                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

@endsection
