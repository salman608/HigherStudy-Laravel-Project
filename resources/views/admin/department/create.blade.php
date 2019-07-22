@extends('layouts.admin_layout')
@section('admin_content')

<div class="content container-fluid">

    <div class="row">

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
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="card-title">Add Department</h4>
                <form class="form-horizontal" action="{{route('department.store')}}" method="post" >
                   {{csrf_field()}}
                    <div class="form-group">
                        <label class="control-label col-lg-2">Department Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" placeholder="Department Name---">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">University Name</label>
                            <div class="col-md-10">
                              <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" name="universities[]">

                              @foreach ($universities as $university)
                              <option value="{{$university->id}}">{{$university->name}}</option>
                              @endforeach
                              </select>
                            </div>
                    </div>



                    <div class="m-t-20 text-center">
                      <button class="btn btn-primary btn-lg">Publish Department</button>
                  </div>

                </form>
               </div>
             </div>
            </div>
      </div>


@endsection
