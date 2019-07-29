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
                <h4 class="card-title">Add Course Details</h4>
                <form class="form-horizontal" action="{{route('course.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label class="control-label col-lg-2">University Name</label>
                        <div class="col-md-10">
                          <select class="form-control" name="university_id">
                            @foreach($universities as $university)
                          <option value="{{$university->id}}">{{$university->name}}</option>

                          @endforeach
                          </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Department name</label>
                        <div class="col-md-10">
                          <select class="form-control" name="department_id">
                            @foreach($departments as $department)
                          <option value="{{$department->id}}">{{$department->name}}</option>

                          @endforeach
                          </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Course Fee</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="course_fee" placeholder="Course fee" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Total Seat</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="Seat" placeholder="Enter total Seat---" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Applycation Link</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="app_link" placeholder="www.salman.com" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Application Process</label>
                        <div class="col-md-10">
                            <textarea name="apply_process" class="tinymce" rows="3" cols="115"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Requirment</label>
                        <div class="col-md-10">
                            <textarea name="requirment" class="tinymce" rows="5" cols="115"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Professor</label>
                        <div class="col-md-10">
                            <textarea name="professor" class="tinymce" rows="5" cols="115"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Financial Projection</label>
                        <div class="col-md-10">
                            <textarea name="financial" class="tinymce" rows="5" cols="115"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Scholarship Process</label>
                        <div class="col-md-10">
                            <textarea name="schoolarship" class="tinymce" rows="5" cols="115"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Accommodation</label>
                        <div class="col-md-10">
                            <textarea name="accomodation" class="tinymce" rows="5" cols="115"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Application Deadline</label>
                        <div class="col-md-10">
                            <input type="date" name="date" class="form-control">
                        </div>
                    </div>

                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary btn-lg">Publish Course details</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>



@endsection
