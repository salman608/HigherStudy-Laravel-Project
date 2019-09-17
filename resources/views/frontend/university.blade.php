@extends('layouts.frontend_layout')

@section('content')

<!--================Home Banner Area =================-->

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content text-center">
          <h2>University</h2>
          <div class="page_link">
            <a href="{{URL::to('/')}}">Home</a>
            <a href="">Country</a>

          </div>
        </div>
      </div>
    </div>
  </section>

    <!--================End Home Banner Area =================-->


  <!--================Blog Agency Area =================-->

        @if($count>0)

          <section class="blog_categorie_area">
              <div class="container">

                  <div class="row">
                    @foreach($country->universities->sortBy('rank') as $university)
                      <div class="col-lg-3">
                        <a href="{{ route('universitybydepartment', $university->id) }}">
                          <div class="categories_post">
                              <img src="{{asset('uploads/university/'.$university->image)}}" alt="post" style="height:150px;">
                              <div class="categories_details">
                                  <div class="categories_text">
                                      <a href="{{ route('universitybydepartment', $university->id) }}"><h5>{{$university->name}}</h5></a>
                                      <div class="border_line"></div>
                                      <p>World Rank - {{$university->rank}}</p>
                                       <p style="display:none;">Rank - {{$count}}</p>
                                  </div>
                              </div>
                          </div>
                          </a>
                      </div>
                      @endforeach
                    @else
                       <div class="text-center mb-5">
                         <h2>University List is Comming Soon</h2>
                         <h3> Data is not Available,, please wait </h3>

                       </div>
                     @endif


                  </div>
              </div>
          </section>
        {{-- @else
           <div class=" ">
             <h3> Hello</h3>
           </div>
         @endif --}}





@endsection
