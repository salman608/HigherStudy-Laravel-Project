@extends('layouts.admin_layout')
@section('admin_content')

<div class="row">
      <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="dash-widget dash-widget5">
              <span class="dash-widget-icon bg-success"><i class="fa fa-university" aria-hidden="true"></i></span>
              <div class="dash-widget-info">
                  <h3>{{ $university_count->count() }}</h3>
                  <span>University</span>
              </div>
          </div>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="dash-widget dash-widget5">
              <span class="dash-widget-icon bg-info"><i class="fa fa-users" aria-hidden="true"></i></span>
              <div class="dash-widget-info">
                  <h3>{{$agency_count->count()}}</h3>
                  <span>Agency</span>
              </div>
          </div>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="dash-widget dash-widget5">
              <span class="dash-widget-icon bg-warning"><i class="fa fa-graduation-cap"></i></span>
              <div class="dash-widget-info">
                  <h3>{{ $student_view->count() }}</h3>
                  <span>Student</span>
              </div>
          </div>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="dash-widget dash-widget5">
              <span class="dash-widget-icon bg-danger"><i class="fa fa-flag" aria-hidden="true"></i></span>
              <div class="dash-widget-info">
                  <h3>{{ $country_count->count() }}</h3>
                  <span>Country</span>
              </div>
          </div>
      </div>

      <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="dash-widget dash-widget5">
              <span class="dash-widget-icon bg-info"><i class="fa fa-book" aria-hidden="true"></i></span>
              <div class="dash-widget-info">
                  <h3>{{ $dept_count->count() }}</h3>
                  <span>Department</span>
              </div>
          </div>
      </div>

      <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="dash-widget dash-widget5">
              <span class="dash-widget-icon"  style="background:#082D76 ;"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
              <div class="dash-widget-info">
                  <h3>{{ $subscribe_count->count() }}</h3>
                  <span>Subscriber</span>
              </div>
          </div>
      </div>

      <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="dash-widget dash-widget5">
              <span class="dash-widget-icon" style="background:#900C3F  ;"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
              <div class="dash-widget-info">
                  <h3>{{ $course_count->count() }}</h3>
                  <span>Course</span>
              </div>
          </div>
      </div>



      <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="dash-widget dash-widget5">
              <span class="dash-widget-icon " style="background:#DA3816 ;"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span>
              <div class="dash-widget-info">
                  <h3>{{ $message_count->count() }}</h3>
                  <span>Message</span>
              </div>
          </div>
      </div>
  </div>
  <br>
<hr>
<br>

  <div class="row">
      <div class="col-md-12">
          <div class="profile-view">
              <div class="profile-img-wrap">
                  <div class="profile-img">
                      <a href="#"><img class="avatar" src="backend/images/s.jpg" alt=""></a>
                  </div>
              </div>

  <div class="profile-basic">
                  <div class="row">
                      <div class="col-md-5" style="margin-top: 4%;">
                          <div class="profile-info-left">
                              <h3 class="user-name m-t-0 m-b-0">Admin</h3>
                              <div class="staff-id">Adminitrator</div>

                          </div>
                      </div>
                      <div class="col-md-7">
                          <ul class="personal-info">
                              <li>
                                  <span class="title">Name:</span>
                                  <p class="text" style="font-size: 17px">Salman Rahman</p>
                              </li>
                              <li>
                                  <span class="title">Phone Number:</span>
                                  <p class="text" style="font-size: 17px">01725496104</p>
                              </li>
                              <li>
                                  <span class="title">Email Address:</span>
                                  <p class="text" style="font-size: 17px">Admin@gmail.com</p>
                              </li>
                              <li>
                                  <span class="title">Website Email :</span>
                                  <p class="text" style="font-size: 17px">Salman608@gmail.com</p>
                              </li>
                              <li>
                                  <span class="title">Website Title:</span>
                                  <p class="text" style="font-size: 17px">Study in Abrode</p>
                              </li>

                          </ul>
                      </div>
                  </div>
              </div>

            </div>
     </div>
 </div>




















@endsection
