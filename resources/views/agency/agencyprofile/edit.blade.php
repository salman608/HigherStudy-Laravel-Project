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
                      <h4 class="m-b-0 text-white">Insert Your Agency Profile</h4>
                    </div>
                      <div class="card-body">
                        <form action="{{route('agencyprofile.update',Auth::user()->id)}}" method="post" style="width:780px;margin:auto;" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')

                          <div class="form-group">
                            <label for="">Acency Title</label>
                            <input type="text" name="title" class="form-control" id="" value=" @isset($agencyprofile->title){{$agencyprofile->title}}@endisset">
                          </div>

                          <div class="form-group">
                            <label for="">Acency SubTitle</label>
                            <input type="text" name="subtitle" class="form-control" id="" value=" @isset($agencyprofile->subtitle){{$agencyprofile->subtitle}}@endisset">
                          </div>

                          <div class="form-group">
                            <label for="">Acency Email</label>
                            <input type="text" name="email" class="form-control" id="" value=" @isset($agencyprofile->email){{$agencyprofile->email}}@endisset">
                          </div>

                          <div class="form-group">
                            <label for="">Acency Adress</label>
                            <textarea name="address" class="form-control" rows="8" cols="100">
                                 @isset($agencyprofile->address){{$agencyprofile->address}}@endisset
                            </textarea>
                          </div>

                          <div class="form-group">
                            <label for="">Acency Image</label>
                            <input type="file" name="image"  class="form-control" >
                          </div>

                          <div class="form-group">
                            <label for="">Acency Phone</label>
                            <input type="text" name="phone" class="form-control" id="" value=" @isset($agencyprofile->phone){{$agencyprofile->phone}}@endisset">
                          </div>

                          <div class="form-group">
                            <label for="">Acency website</label>
                            <input type="text" name="website" class="form-control" id="" value=" @isset($agencyprofile->website){{$agencyprofile->website}}@endisset">
                          </div>


                          <div class="form-group">
                            <label for="">Facebook</label>
                            <input type="text" name="facebook" class="form-control" id="" value=" @isset($agencyprofile->facebook){{$agencyprofile->facebook}}@endisset">
                          </div>

                          <div class="form-group">
                            <label for="">Twiter</label>
                            <input type="text" name="twiter" class="form-control" id="" value=" @isset($agencyprofile->twiter){{$agencyprofile->twiter}}@endisset">
                          </div>


                          <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" class="tinymce" rows="5" cols="80">
                                 @isset($agencyprofile->description){{$agencyprofile->description}}@endisset
                            </textarea>
                          </div>

                          <button type="submit" class="btn btn-primary" >update Agency Profile</button>




                        </form>
                      </div>


                    </div>

            </div>
     </div>






@endsection
