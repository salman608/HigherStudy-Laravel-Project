@extends('layouts.admin_layout')
@section('admin_content')

<div class="content container-fluid">


    <div class="row">
        <div class="col-lg-12">
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
                <h4 class="card-title">Update Country</h4>
                <form class="form-horizontal" action="{{route('country.update',$country->id)}}" method="post" enctype="multipart/form-data">
                   {{csrf_field()}}
                   @method('PUT')
                    <div class="form-group">
                        <label class="control-label col-lg-2">Country Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{$country->name}}">
                        </div>
                    </div>
                  

                    <div class="form-group">
                        <label class="control-label col-lg-2">Country Image</label>
                        <div class="col-lg-10">
                            <input class="form-control" name="image" type="file">
                        </div>
                    </div>



                    <div class="m-t-20 text-center">
                      <button class="btn btn-primary btn-lg">Publish Country</button>
                  </div>

                </form>
               </div>
             </div>
            </div>
            </div>


@endsection
