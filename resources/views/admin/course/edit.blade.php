@extends('layouts.admin_layout')
@section('admin_content')

<div class="content container-fluid">
    <div class="row">
        <!-- <div class="col-lg-12"> <h4 class="page-title">Category Level</h4> </div> -->

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error )
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

        @endif
        @if(session()->has('studentMessage'))
        <div class="alert alert-success" role="alert">
            <p>
                {{session()->get("studentMessage")}}</p>
        </div>
        @endif
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="card-title">Update Course Details</h4>
                <form class="form-horizontal" action="{{route('course.update',$course->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @method('PUT')



                    <div class="form-group">
                        <label class="control-label col-lg-2">Course Fee</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="course_fee"value="{{ $course->course_fee}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Total Seat</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="Seat" value="{{ $course->Seat}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Applycation Link</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="app_link" value="{{ $course->app_link}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Application Process</label>
                        <div class="col-md-10">
                            <textarea name="apply_process" class="tinymce" rows="3" cols="115">
                              {{$course->apply_process}}
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Requirment</label>
                        <div class="col-md-10">
                            <textarea name="requirment" class="tinymce" rows="5" cols="115">
                              {{$course->requirment}}
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Professor</label>
                        <div class="col-md-10">
                            <textarea name="professor" class="tinymce" rows="5" cols="115">
                               {{$course->professor}}
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Financial Projection</label>
                        <div class="col-md-10">
                            <textarea name="financial" class="tinymce" rows="5" cols="115">
                               {{$course->financial}}
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Scholarship Process</label>
                        <div class="col-md-10">
                            <textarea name="schoolarship" class="tinymce" rows="5" cols="115">
                              {{$course->schoolarship}}
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Accommodation</label>
                        <div class="col-md-10">
                            <textarea name="accomodation" class="tinymce" rows="5" cols="115">
                               {{$course->accomodation}}
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Application Deadline</label>
                        <div class="col-md-10">
                            <input type="date" name="date" class="form-control" value="{{$course->date}}">
                        </div>
                    </div>

                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary btn-lg">Update Course details</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>



@endsection
