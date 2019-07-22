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
                                <h6 class="card-title text-bold">All Country</h6>

                                 <table class="display datatable table-bordered  table table-stripped">
                                     <thead>
                                         <tr>
                                             <th>CountryId</th>
                                             <th>CountryName</th>
                                             <th>CategoryName</th>
                                             <th>CountryImage</th>
                                             <th>Status</th>
                                             <th>Action</th>

                                         </tr>
                                     </thead>
                                     <tbody>
                                       @foreach($countries as $country)
                                         <tr>
                                             <td>{{$country->id}}</td>
                                             <td>{{$country->name}}</td>
                                             <td>
                                            @foreach($country->categories as $category)
                                            {{$category->name }} ||

                                            @endforeach
                                             </td>
                                             <td>
                                  <img src="{{URL::to('uploads/country/'.$country->image)}}"  style="height:80px;width:80px;border-radius: 50%;">

                                             </td>

                                             <td>
                                               @if($country->status==1)
                                                <span class="label label-success">Active</span>
                                                @else
                                                <span class="label label-warning">Unactive</span>

                                                @endif

                                             </td>
                                             <td>
                                         @if($country->status==1)
                               <a class="btn btn-success" href="{{URL::to('/unactive_country/'.$country->id)}}">
                                 <i class="fa fa-thumbs-down"></i>
                               </a>

                               @else
                               <a class="btn btn-warning" href="{{URL::to('/active_country/'.$country->id)}}">
                               <i class="fa fa-thumbs-up"></i>
                               </a>
                               @endif

         <a class="btn btn-info" href="{{route('country.edit',$country->id)}}">
                            <i class="fa fa-pencil-square-o"></i></a>

                            <form id="delete-form-{{ $country->id }}" action="{{route('country.destroy',$country->id)}}" method="POST" style="display:none;">
                      @csrf
                      @method('DELETE')

                    </form>
                    <button type="button" class="btn btn-danger" name="button" onclick="if(confirm('Are you sure? You want to delete this?'))
                    {
                      event.preventDefault();
                      document.getElementById('delete-form-{{ $country->id }}').submit();
                    }else{
                      event.preventDefault();
                    }"><i class="fa fa-trash"></i></button>

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
