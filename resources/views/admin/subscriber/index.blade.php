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
                                <h6 class="card-title text-bold">All Subscriber</h6>

                                 <table class="display datatable table-bordered  table table-stripped">
                                     <thead>
                                         <tr>

                                             <th>Id</th>
                                             <th>Email</th>
                                             <th>Time</th>
                                             <th>Action</th>
                                          </tr>
                                     </thead>
                                     <tbody>
                                       @foreach($subscribers as $key=>$subscriber)
                                         @php
                                           $key=0;
                                         @endphp
                                         <tr>

                                             <td>{{$subscriber->id}}</td>
                                             <td>{{$subscriber->email}}</td>
                                             <td>{{$subscriber->created_at}}</td>
                                             <td>
                                               

                                               <button type="button" class="btn btn-danger weves-effect" name="button" onclick="deletesubscriber({{ $subscriber->id }})"><i class="fa fa-trash"></i></button>

                                               <form id="delete-form-{{ $subscriber->id }}" action="{{ route('subscriber.destory', $subscriber->id) }}" method="post" style="display:none;">
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
