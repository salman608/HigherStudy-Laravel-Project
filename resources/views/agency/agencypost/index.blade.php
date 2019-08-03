@extends('layouts.agency_layout')
@section('agency_content')


<div class="container-fluid mt-5">

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

<div class="row">
        <div class="col-lg-12">
              <div class="card card-outline-info">
                  <div class="card-header">
                    <h4 class="m-b-0 text-white">All Agency post </h4>
                  </div>
                    <div class="card-body">

                      <table class="display datatable table-bordered  table table-stripped">
                       <thead>
                           <tr>

                               <th>CountryName</th>
                               <th>University</th>
                               <th>Requirment</th>
                               <th>Facilities</th>

                               <th>Image</th>
                               <th>Description</th>
                               <th>Status</th>
                               <th>Action</th>

                           </tr>
                       </thead>
                       <tbody>
                         @foreach($agencyposts as $agencypost)
                           <tr>
                            
                               <td>{{$agencypost->country}}</td>
                               <td>{{$agencypost->university}}</td>
                               <td>{{substr(strip_tags($agencypost->requirment),0,20) }}{{strlen(strip_tags($agencypost->requirment)) > 20 ? "..." : ""}}</td>
                               <td>{{substr(strip_tags($agencypost->facilities),0,20) }}{{strlen(strip_tags($agencypost->facilities)) > 20 ? "..." : ""}}</td>

                               <td>
                                  <img src="{{URL::to('uploads/agencypost/'.$agencypost->image)}}"  style="height:80px;width:80px;border-radius: 50%;">

                               </td>

                               <td>{{substr(strip_tags($agencypost->description),0,20) }}{{strlen(strip_tags($agencypost->description)) > 20 ? "..." : ""}}</td>
                               <td>active</td>
                               <td>
                               <a class="btn btn-info" href="{{route('agencypost.edit',$agencypost->id)}}">
                                 <i class="fa fa-pencil-square-o"></i></a>

                                   <form id="delete-form-{{ $agencypost->id }}" action="{{route('agencypost.destroy',$agencypost->id)}}" method="POST" style="display:none;">
                                    @csrf
                                      @method('DELETE')

                                    </form>
                                   <button type="button" class="btn btn-danger" name="button" onclick="if(confirm('Are you sure? You want to delete this?'))
                                          {
                                   event.preventDefault();
                                       document.getElementById('delete-form-{{ $agencypost->id }}').submit();
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
