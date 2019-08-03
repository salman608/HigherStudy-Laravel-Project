@extends('layouts.agency_layout')
@section('agency_content')

<div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Form Layout</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item active">Form Layout</li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>


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
                      <h4 class="m-b-0 text-white">Agency post Update </h4>
                    </div>
                      <div class="card-body">
                        <form action="{{route('agencypost.update',$agencypost->id)}}" method="post" style="width:780px;margin:auto;" enctype="multipart/form-data">
                          @csrf
                          @method("PUT")

                          <div class="form-group">
                            <label for="">Country</label>
                            <input type="text" name="country" class="form-control" value="{{$agencypost->country}}">
                          </div>

                          <div class="form-group">
                            <label for="">University</label>
                            <input type="text" name="university" class="form-control" value="{{$agencypost->university}}">
                          </div>

                          <div class="form-group">
                            <label for="">Academic Requirment</label>
                            <textarea name="requirment" class="form-control"  rows="3" cols="80">{{$agencypost->requirment}}</textarea>
                          </div>

                          <div class="form-group">
                            <label for="">Extra Facilities</label>
                            <textarea name="facilities" class="form-control"  rows="3" cols="80">{{$agencypost->facilities}}</textarea>
                          </div>

                          <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                          </div>

                          <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" class="tinymce form-control" rows="5" cols="80">{{$agencypost->description}}</textarea>
                          </div>



                          <button type="submit" class="btn btn-primary" >Update Agency Post</button>




                        </form>
                      </div>


                    </div>

            </div>
     </div>






@endsection
