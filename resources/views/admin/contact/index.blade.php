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
                                <h6 class="card-title text-bold">All Message</h6>

                                 <table class="display datatable table-bordered  table table-stripped">
                                     <thead>
                                         <tr>

                                             <th>Name</th>
                                             <th>Phone</th>
                                             <th>Email</th>
                                             <th>Description</th>
                                             <th>Time</th>
                                             <th>Action</th>
                                          </tr>
                                     </thead>
                                     <tbody>
                                       @foreach($contacts as $key=>$contact)
                                         @php
                                           $key=0;
                                         @endphp
                                         <tr>

                                             <td>{{$contact->name}}</td>
                                             <td>{{$contact->phone}}</td>
                                             <td>{{$contact->email}}</td>
                                             <td>{{$contact->description}}</td>
                                             <td>{{$contact->created_at}}</td>
                                             <td>

                                              <a class="btn btn-warning"href="#"> <i class="fa fa-eye"></i> </a>

                                              <button type="button" class="btn btn-danger weves-effect" name="button" onclick="deletecontact({{ $contact->id }})"><i class="fa fa-trash"></i></button>

                                              <form id="delete-form-{{ $contact->id }}" action="{{ route('contact.destory', $contact->id) }}" method="post" style="display:none;">
                                                @csrf
                                                @method('DELETE')
                                              </form>

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
