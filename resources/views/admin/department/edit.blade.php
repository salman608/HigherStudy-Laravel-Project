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
                <h4 class="card-title">Add Category</h4>
                <form class="form-horizontal" action="{{route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
                   {{csrf_field()}}
                   @method('PUT')
                    <div class="form-group">
                        <label class="control-label col-lg-2">Category Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{$category->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Category Description</label>
                        <div class="col-lg-10">
                            <textarea rows="5" cols="5" class="form-control" name="description">{{$category->description}}</textarea>
                        </div>
                    </div>

                      <div class="form-group">
                          <label class="control-label col-lg-2">Change Category Image</label>
                          <div class="col-lg-10">
                              <input class="form-control" name="image" type="file" value="{{$category->image}}">
                          </div>
                      </div>

                    <div class="m-t-20 text-center">
                      <button class="btn btn-primary btn-lg">Publish Category</button>
                  </div>

                </form>
            </div>
            </div>
            </div>
            </div>


@endsection
