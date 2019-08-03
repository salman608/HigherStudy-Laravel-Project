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
                                <h6 class="card-title text-bold">All Department</h6>

                                 <table class="display datatable table-bordered  table table-stripped">
                                     <thead>
                                         <tr>
                                             <th>DepartmentId</th>
                                             <th>DepartmentName</th>
                                             <th>UniversityName</th>

                                             <th>Action</th>

                                         </tr>
                                     </thead>
                                     <tbody>
                                       @foreach($departments as $department)
                                         <tr>
                                             <td>{{$department->id}}</td>
                                             <td>{{$department->name}}</td>

                                             <td>

                                               @foreach($department->universities as $university)
                                               {{$university->name }} ||

                                               @endforeach

                                             </td>

                                             <td>


         <a class="btn btn-info" href="{{route('department.edit',$department->id)}}">
                            <i class="fa fa-pencil-square-o"></i></a>

                      <form id="delete-form-{{ $department->id }}" action="{{route('department.destroy',$department->id)}}" method="POST" style="display:none;">
                      @csrf
                      @method('DELETE')

                    </form>
                    <button type="button" class="btn btn-danger" name="button" onclick="if(confirm('Are you sure? You want to delete this?'))
                    {
                      event.preventDefault();
                      document.getElementById('delete-form-{{ $department->id }}').submit();
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
