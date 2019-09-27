<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="icon" href="img/favicon.png" type="image/png"> -->
  <title>Next Stop student panel</title>
  <!-- Bootstrap CSS -->
  <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Titillium+Web|Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/vendors/linericon/style.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/vendors/lightbox/simpleLightbox.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/vendors/nice-select/css/nice-select.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/vendors/animate-css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/vendors/popup/magnific-popup.css')}}">
  <!-- main css -->
  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/style.css')}}">

</head>

<body>

  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="top_menu row m0">
      <div class="container">
        <div class="float-left">
          <ul class="list header_social">
            <li><a href="https://www.facebook.com/salman6633" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/salman_designer" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/in/salman-rahman-02b956147/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="float-right">
          <a class="dn_btn" href="tel:+4400123654896">+8801725496104</a>
          <a class="dn_btn" href="mailto:support@colorlib.com">salman@gmail.com</a>

        </div>
      </div>
    </div>
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" style="font-weight:bold;" href="{{ route('student') }}">Student Dashboard</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="{{URL::to('/about')}}">About</a></li>



              <li class="nav-item"><a class="nav-link" href="{{URL::to('/contact')}}">Contact</a></li>


              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('student.logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('student.logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest



            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <!--================Home Banner Area =================-->
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div class="banner_content text-center">
            <h2>Welcome, {{Auth::user()->name}}</h2>
            <div class="page_link">
              <a href="index.html"></a>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!--================Contact Area =================-->


   <div class="container">


            <!-- Section: Team v.3 -->
                  <section class="team-section">

                          <!-- Section heading -->
                            <!-- <h2 class="h1-responsive font-weight-bold text-center my-5">Welcome, Salman</h2> -->
                          <!-- Section description -->
                            <p class="grey-text text-center w-responsive mx-auto mb-5"  style="color:green; font-size:15px;font-weight:bold;">lossing hope is equal to lossing the life</p>

                          <!-- Grid row-->
                            <div class="row text-center text-md-left">

                                <!-- Grid column -->
                                    <div class="col-xl-6 col-lg-12 mb-5 d-md-flex ">
                                          <div class="avatar mb-md-0 mb-4 mx-4">
                                            <img src="{{URL::asset('uploads/sprofile/'.Auth::user()->image)}}" class="rounded z-depth-1" alt="Sample avatar" style="max-width: 192px;height:231px;">
                                          </div>
                                          <div class="mx-4">
                                                  <h4 class="font-weight-bold mb-3">{{Auth::user()->name}}</h4>
                                                  <h6 class="font-weight-bold grey-text mb-3">{{ Auth::user()->email }}</h6>
                                                  <p class="grey-text">01725496104</p>


                                          </div>
                                              <div class="mx-4">

                                                  <div class="row">

                                                          <div class="card" style="  width: 590px !important;">

                                                            <div class="card-body">

                                                               <div class="row">
                                                                   <div class="col-md-4 col-lg-4 text-success"><i class="fa fa-tasks" style="font-size: 110px;"></i>
                                                                   </div>
                                                                   <div class="col-md-8 ">

                                                                        <p style="font-size: 24px">Your Total Apply :{{ $hi->count() }} </p>

                                                                   </div>
                                                               </div>

                                                            </div>
                                                            <div class="mx-auto mb-4 mt-3">

                                                                <button class="btn btn-success "  data-toggle="modal" data-target="#updateProfile">Update Your Profile</button>
                                                                <button class="btn btn-success " data-toggle="modal" data-target="#changePass">Password Change</button>
                                                                <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();" class="btn btn-success">
                                                                        Logout
                                                                </a>


                                                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                                    {{ csrf_field() }}

                                                                </form>
                                                            </div>




                                                          @if (session('error'))
                                                                <div class="alert alert-danger text-center" style="font-size: 18px;">
                                                                    {{ session('error') }}
                                                                </div>
                                                            @endif

                                                            @if (session('success'))
                                                                <div class="alert alert-success text-center" style="font-size: 18px;">
                                                                    {{ session('success') }}
                                                                </div>
                                                            @endif


                                                            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div
            @endif
                                                        </div>
                                                    </div> {{-- row --}}
                                              </div> {{-- mx-4 --}}


                                      </div> {{-- mdflex --}}




                              </div>
                              <!-- Grid row-->

                  </section>

                  <div class="row">
                    <div class="card" style="width:100%">
                      <div class="card-header" style="background:#04091e">
                        <h3 class="text-center text-white">Application History</h3>
                      </div>

                      <div class="card-body">
                        <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Application Id</th>
        <th scope="col">Country Name</th>
        <th scope="col">preferdegree</th>
        <th scope="col">Apply Date</th>

      </tr>
    </thead>


    <tbody>
      @foreach ($hi as $history)

      <tr>
        <th scope="row">2</th>
        {{-- <td>@if($history->agency($history->agency_id))

            {{ $details->title }}

           @endif
        </td> --}}

        <td>{{ $history->country }}</td>
        <td>{{$history->preferdegree}}</td>
        <td>{{ $history->created_at }}</td>
      
      </tr>

        @endforeach



    </tbody>
  </table>
                      </div>
                    </div>
                  </div>



  </div>
                    <!-- Section: Team v.3 -->




@yield('content')


  <footer class="footer-area p_120">
    <div class="container">
      <div class="row">
        <div class="col-lg-2  col-md-6 col-sm-6">
          <div class="single-footer-widget tp_widgets">
            <h6 class="footer_title">Top Products</h6>
            <ul class="list">
              <li><a href="https://www.mit.edu/" target="_blank">MIT</a></li>
              <li><a href="https://www.stanford.edu/" target="_blank">Stanford University</a></li>
              <li><a href="https://www.harvard.edu/" target="_blank">Harvard university</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2  col-md-6 col-sm-6">
          <div class="single-footer-widget tp_widgets">
            <h6 class="footer_title">Quick Links</h6>
            <ul class="list">
              <li><a href="https://www.4icu.org/bd/" target="_blank">Top University</a></li>
              <li><a href="https://www.scholarships.com/financial-aid/college-scholarships/scholarship-information/" target="_blank">Full Scholarship</a></li>
              <li><a href="https://www.timeshighereducation.com/student/best-universities/best-universities-europe" target="_blank">Europe</a></li>
              <li><a href="" target="_blank">Terms of Service</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2  col-md-6 col-sm-6">
          <div class="single-footer-widget tp_widgets">
            <h6 class="footer_title">Features</h6>
            <ul class="list">
              <li><a href="https://www.na.edu/" target="_blank">North America </a></li>
              <li><a href="https://www.timeshighereducation.com/" target="_blank">South America</a></li>
              <li><a href="https://en.wikipedia.org/wiki/Central_American_University_(Managua)" target="_blank">Central America</a></li>
              <li><a href="https://www.topuniversities.com/university-rankings/asian-university-rankings/2019" target="_blank">Asia</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2  col-md-6 col-sm-6">
          <div class="single-footer-widget tp_widgets">
            <h6 class="footer_title">Resources</h6>
            <ul class="list">
              <li><a href="https://www.wes.org/advisor-blog/" target="_blank">Guides</a></li>
              <li><a href="https://www.lakeheadu.ca/admissions" target="_blank">Research</a></li>
              <li><a href="#" target="_blank">Experts</a></li>
              <li><a href="#" target="_blank">Agencies</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <aside class="f_widget news_widget">
            <div class="f_title">
              <h3 class="footer_title">Newsletter</h3>
            </div>
            <p>Stay updated with our latest trends</p>
            <div id="mc_embed_signup">
              <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                <div class="input-group d-flex flex-row">
                  <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                  <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
                </div>
                <div class="mt-10 info"></div>
              </form>
            </div>
          </aside>
        </div>
      </div>
      <div class="container">
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
          <p class="col-lg-8 col-md-8 footer-text m-0">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | This Website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">SparkTeam</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
          <div class="col-lg-4 col-md-4 footer-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-behance"></i></a>
          </div>
        </div>
      </div>

    </div>
  </footer>
  <!--================ End footer Area  =================-->


  <!-- Modal -->
<div class="modal fade" id="updateProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
      <div class="modal-body">


<form class="form-horizontal form-material" method="POST" enctype="multipart/form-data" action="{{ route('student.profile.update') }}">

            @csrf
            @method("PUT")



              <div class="form-group row">
                  <label for="name" class="col-sm-4 col-form-label">Name</label>

                  <div class="col-sm-8">
                      <input id="name" type="text" class="form-control" name="name"  value="{{ Auth::user()->name }}">
                  </div>
              </div>

              <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Email Address</label>

                    <div class="col-sm-8">
                        <input id="email" type="text" class="form-control" name="email"  value="{{ Auth::user()->email }}">

                    </div>
                </div>

                <div class="form-group row">
                    <label for="file" class="col-sm-4 col-form-label">Profile Picture</label>

                    <div class="col-sm-8">
                        <input id="file" type="file" class="form-control" name="image" >
                    </div>
                </div>




      </div> {{-- modal body --}}
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
</form>
    </div> {{-- modal-content --}}
  </div>
</div> {{-- end modal --}}


<!-- Change password Modal -->
<div class="modal fade" id="changePass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change your password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form class="form-horizontal form-material" method="POST"  action="{{ route('student.password.update') }}">
            @csrf
            @method('PUT')


            <div class="form-group row">
                <label for="new-password" class="col-sm-4 col-form-label">Current Password</label>

                <div class="col-sm-8">
                    <input id="current-password" type="password" class="form-control" name="old_password" placeholder="Enter old Password" >

                </div>
            </div>

            <div class="form-group row">
                <label for="new-password" class="col-sm-4 col-form-label">New Password</label>

                <div class="col-sm-8">
                    <input id="new-password" type="password" class="form-control" name="password" placeholder="Enter New Password" >
                </div>
            </div>

            <div class="form-group row">
                <label for="new-password-confirm" class="col-sm-4 col-form-label" style="font-size: 13px;">Confirm Password</label>

                <div class="col-sm-8">
                    <input id="new-password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Reenter new Password">
                </div>
            </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div> {{-- modal-dialog --}}
</div>  {{-- modal fade --}}

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif




    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div
    @endif





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.form.js')}}"></script>
  <script src="{{asset('frontend/js/popper.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/js/stellar.js')}}"></script>
  <script src="{{asset('frontend/vendors/lightbox/simpleLightbox.min.js')}}"></script>
  <script src="{{asset('frontend/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('frontend/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/vendors/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/vendors/popup/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('frontend/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/vendors/counter-up/jquery.counterup.js')}}"></script>
  <script src="{{asset('frontend/js/mail-script.js')}}"></script>
  <script src="{{asset('frontend/js/theme.js')}}"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

  {!! Toastr::message() !!}
  <script>
  @if ($errors->any())
  @foreach ($errors->all() as  $error)
  toastr.error('{{ $error }}', 'Error',{
  closeButton:true,
  progressBar:true,
  });

  @endforeach
  @else
  @endif

  </script>


</body>

</html>
