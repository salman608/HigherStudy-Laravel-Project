@extends('layouts.frontend_layout')

@section('content')

<!--================Home Banner Area =================-->

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content text-center">
          <h2>All University</h2>
          <div class="page_link">
            <a href="index.html">Home</a>
            <a href="#">Country</a>
            <a href="about-us.html">University</a>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!--================End Home Banner Area =================-->


  <!--================Blog Agency Area =================-->
          <section class="blog_categorie_area">
              <div class="container">
                    <div class="main_title" style="margin-top:-160px;">
                      <h2>Largest Agency in our Country</h2>
                    </div>
                  <div class="row">
                    @foreach($country->universities->sortBy('rank') as $university)
                      <div class="col-lg-3">
                          <div class="categories_post">
                              <img src="{{asset('uploads/university/'.$university->image)}}" alt="post">
                              <div class="categories_details">
                                  <div class="categories_text">
                                      <a href="{{ route('universitybydepartment', $university->id) }}"><h5>{{$university->name}}</h5></a>
                                      <div class="border_line"></div>
                                      <p>World Rank - {{$university->rank}}</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @endforeach

                  </div>
              </div>
          </section>
          <!--================Blog Agency Area =================-->



@endsection
