@extends('layouts.agency_layout')
@section('agency_content')


    <div class="row page-titles">
                  <div class="col-md-5 align-self-center">
                      <h3 class="text-themecolor">Profile</h3>
                  </div>
                  <div class="col-md-7 align-self-center">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                          <li class="breadcrumb-item">pages</li>
                          <li class="breadcrumb-item active">Profile</li>
                      </ol>
                  </div>
                  <div>
                      <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                  </div>
              </div>



              <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="{{URL::asset('uploads/profile/'.Auth::user()->image)}}" class="img-circle" width="150">
                                    <h4 class="card-title m-t-10">{{ Auth::user()->name }}</h4>
                                    <h6 class="card-subtitle">{{ Auth::user()->email }}</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6>{{ Auth::user()->email }}</h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6>01725496104</h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6>Mirpur,Dhaka</h6>
                                <small class="text-muted p-t-30 db">Social Profile</small>
                                <br>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">

                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Password</a> </li>

                                <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#profile" role="tab" aria-selected="true">Profile</a> </li>

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material" method="POST"  action="{{ route('password.update') }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label class="col-md-12">Old Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" name="old_password"
                                                    placeholder="Enter Old Password"  class="form-control form-control-line">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12"> New Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" id="password" name="password" placeholder="Enter New Password" class="form-control form-control-line">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12"> Confirm Password</label>
                                                <div class="col-md-12">
                                                    <input type="password"  placeholder="Enter Confirm Password" name="password_confirmation"  class="form-control form-control-line">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-success">Update Password</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material" method="POST" enctype="multipart/form-data" action="{{ route('profile.update') }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12">Image</label>
                                                <div class="col-md-12">
                                                    <input type="file" name="image"  class="form-control form-control-line">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-success">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->

                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>






@endsection
