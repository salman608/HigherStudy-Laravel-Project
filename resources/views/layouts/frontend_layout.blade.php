<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="icon" href="img/favicon.png" type="image/png"> -->
  <title>HigherStudy Education</title>
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
   <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
   @stack('css')

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

            <li><a href="#" class="text-uppercase" style="margin-left:280px;font-size:18px;font-style:uppercase;color:#CDA309;">The Shortest Way to Snatch Your Degree </a></li>

          </ul>
        </div>




        <div class="float-right">
          <a class="dn_btn" href="tel:+4400123654896">+8801725496104</a>
          <a class="dn_btn" href="mailto:support@colorlib.com">salman@gmail.com</a>

           {{-- @guest
          <a href="{{route('student.login')}}" style="color:white;font-size:11px;"><i class="fa fa-user"></i>  STUDENT</a>

                @endguest --}}







        </div>



      </div>
    </div>
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href=""><img style="width:180px;height:70px;" src="{{asset('frontend/img/logo.png')}}" alt="..."></a>
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


               {{-- <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ranks</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="topuniversity.html">Top University</a></li>
                </ul>
              </li> --}}

              {{-- <li class="nav-item"><a class="nav-link" href="{{ route('offerview')}}">Agency Offer</a></li>  --}}
              <li class="nav-item"><a class="nav-link" href="{{URL::to('/contact')}}">Contact</a></li>

           @guest
              <li class="nav-item"><a class="btn btn-agency mt-4" href="{{route('login')}}"  style="font-family: 'Titillium Web', sans-serif">
                <i class="fa fa-user"> </i>  Agency</a></li>

                <li class="nav-item"><a class="btn btn-agency mt-4" href="{{route('student.login')}}"  style="font-family: 'Titillium Web', sans-serif">
                  <i class="fa fa-user"> </i>  Student</a></li>


                      @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('') }}</a>
                                </li>
                      @endif
                        @else

                              @if(Auth::guard('student')->check())

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                      {{ Auth::guard('student')->user()->name }}

                                     <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('student') }}">
                                        {{ __('Profile') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('student.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }}<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('setting') }}">
                                        {{ __('profile') }}
                                    </a>





                                    <form id="logout-form" action="{{ route('student.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                                {{-- ----- --}}

                            </li>





                          @endif


                   @endguest

            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->




@yield('content')


  <footer class="footer-area p_120">
    <div class="container">
      <div class="row">
        <div class="col-lg-2  col-md-6 col-sm-6">
          <div class="single-footer-widget tp_widgets">
            <h6 class="footer_title">Top University</h6>
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
            <div >
              <form  action="{{ route('subscriber.store') }}" method="POST" >
                @csrf
                <div class="input-group d-flex flex-row">
                  <input name="email" placeholder="Enter email address" type="email">
                  <button class="btn sub-btn" type="submit"><span class="lnr lnr-arrow-right"></span></button>
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
            </script> All rights reserved | This Website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">SparkTeam</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
          <div class="col-lg-4 col-md-4 footer-social">
            <a href="https://www.facebook.com/salman6633" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/salman_designer" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.linkedin.com/in/salman-rahman-02b956147/" target="_blank"><i class="fa fa-linkedin"></i></a>



          </div>
        </div>
      </div>

    </div>
  </footer>
  <!--================ End footer Area  =================-->






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
  <script>
       $.ajaxSetup({
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
       });
    </script>
    <script src="{{ asset('frontend/ajax.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

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
