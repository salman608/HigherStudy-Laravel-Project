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
                    <h4 class="m-b-0 text-white">All Applicants </h4>
                  </div>
                    <div class="card-body">

                      <table class="display datatable table-bordered  table table-stripped">
                       <thead>
                           <tr>
                               <th>Name</th>
                               <th>Email</th>
                               <th>mobile</th>
                               <th>Address</th>
                               <th>Status</th>
                               <th>Action</th>

                           </tr>
                       </thead>
                       <tbody>
                         @foreach($studentapplays as $studentapplay)
                           <tr>
                               <td>{{$studentapplay->Name}}</td>
                               <td>{{$studentapplay->email}}</td>
                               <td>{{$studentapplay->mobile}}</td>
                               <td>{{$studentapplay->address}}</td>

                               <td>Accept</td>
                               <td>
                               <a class="btn btn-info" href="{{route('studentapply.edit',$studentapplay->id)}}">
                                 <i class="fa fa-pencil-square-o"></i></a>

                                 <a class="btn btn-warning" href="">
                                   <i class="fa fa-eye"></i></a>


                                   <form id="delete-form-{{ $studentapplay->id }}" action="{{route('studentapply.destroy',$studentapplay->id)}}" method="POST" style="display:none;">
                                    @csrf
                                      @method('DELETE')

                                    </form>
                                   <button type="button" class="btn btn-danger" name="button" onclick="if(confirm('Are you sure? You want to delete this?'))
                                          {
                                   event.preventDefault();
                                       document.getElementById('delete-form-{{ $studentapplay->id }}').submit();
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
