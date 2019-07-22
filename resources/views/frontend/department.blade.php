@extends('layouts.frontend_layout')

@section('content')

<!--================Home Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
      <div class="banner_content text-center">
        <h2>Department List</h2>
        <div class="page_link">
          <a href="index.html">Home</a>
          <a href="about-us.html">About Us</a>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
<!--================End Home Banner Area =================-->

<!--===============start Department=================-->

          <div class="container">
            <div class="row mt-5 mb-5">

              @foreach($university->departments as $department)

              <div class="col-md-3">
                <a href="#">
                  <div class="card bg-light" style="width: 18rem;">

                    <div class="card-body">
                      <h5 class="card-title text-dark"><a class="" href="#">{{ $department->name }}</a></h5>

                      <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                  </div>
                </a>
              </div>
              @endforeach
            </div>
          </div>


        <!--================End Department Area =================-->



@endsection
