@extends('layouts.frontend_layout')

@section('content')

<!--================Home Banner Area =================-->

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content text-center">
          <h2>Country</h2>
          <div class="page_link">
            <a href="index.html">Home</a>
            <a href="about-us.html">Country</a>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!--================End Home Banner Area =================-->

  <div class="section-top-border">
      <div class="container">



            <div class="row">

              @foreach($category->countries->sortBy('name') as $country)
                <div class="col-md-6 col-sm-6 col-lg-4">
                  <a href="{{ route('countrybyuniversity', $country->id) }}">
                    <div class="dash-widget2">
                        <span class="dash-widget-icon"><img class="dash-widget-icon" src="{{asset('uploads/country/'.$country->image)}}" alt="" /></span>
                        <div class="dash-widget-info">

                            <h3>{{ $country->name }}</h3>
                        </div>
                    </div>
                    </a>
                </div>
               @endforeach

                <!-- <div class="col-md-6 col-sm-6 col-lg-4">
                    <div class="dash-widget2">
                        <span class="dash-widget-icon bg-info"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                        <div class="dash-widget-info">
                            <h3>1072</h3>
                            <span>Users</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4">
                    <div class="dash-widget2">
                        <span class="dash-widget-icon bg-warning"><i class="fa fa-files-o"></i></span>
                        <div class="dash-widget-info">
                            <h3>72</h3>
                            <span>Projects</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4">
                    <div class="dash-widget2">
                        <span class="dash-widget-icon bg-danger"><i class="fa fa-tasks" aria-hidden="true"></i></span>
                        <div class="dash-widget-info">
                            <h3>618</h3>
                            <span>Tasks</span>
                        </div>
                    </div>
                </div> -->
            </div>


					</div>
            </div>




@endsection
