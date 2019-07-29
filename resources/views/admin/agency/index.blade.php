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
                                <h6 class="card-title text-bold">All Agency Category</h6>

                                 <table class="display datatable table-bordered  table table-stripped">
                                     <thead>
                                         <tr>
                                             <th>AgencyId</th>
                                             <th>AgencyTitle</th>
                                             <th>AgencySubTitle</th>
                                             <th>CategoryImage</th>
                                             <th>Status</th>
                                             <th>Action</th>


                                         </tr>
                                     </thead>
                                     <tbody>
                                       @foreach($agencyprofiles as $agencyprofile)
                                         <tr>
                                             <td>{{$agencyprofile->id}}</td>
                                             <td>{{$agencyprofile->title}}</td>
                                             <td>{{$agencyprofile->subtitle}}</td>
                                             <td>
                                                <img src="{{URL::to('uploads/agency/'.$agencyprofile->image)}}"  style="height:80px;width:130px;">

                                             </td>

                                             <td>
                                               @if($agencyprofile->status==1)
                                                <span class="label label-success">Active</span>
                                                @else
                                                <span class="label label-warning">Unactive</span>

                                                @endif

                                             </td>
                                             <td>
                                         @if($agencyprofile->status==1)
                               <a class="btn btn-success" href="{{URL::to('/unactive_agencycategory/'.$agencyprofile->id)}}">
                                 <i class="fa fa-thumbs-down"></i>
                               </a>

                               @else
                               <a class="btn btn-warning" href="{{URL::to('/active_agencycategory/'.$agencyprofile->id)}}">
                               <i class="fa fa-thumbs-up"></i>
                               </a>
                               @endif

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
