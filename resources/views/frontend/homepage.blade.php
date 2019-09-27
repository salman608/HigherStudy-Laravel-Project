@extends('layouts.frontend_layout')

@section('content')

<!--================Home Banner Area =================-->
<section class="home_banner_area blog_banner">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="blog_b_text text-center">
						<h3 style="font-family: 'Titillium Web', sans-serif;font-size:34px;">We Ensure   better education for a better world</h3>
						<p style="font-family: 'Titillium Web', sans-serif;">There is a moment in the life of any aspiring astronomer that it is time to buy that first</p>
						<a class="main_btn" href="#">Get Start</a>
					</div>
				</div>
            </div>
        </section>
<!--================End Home Banner Area =================-->

<!--================Blog Categorie Area =================-->
        <section class="blog_categorie_area">
            <div class="container">
                  <div class="main_title" style="margin-top:-260px">
                    <h2 style="font-family: 'Titillium Web', sans-serif;color:black;">Degree Level</h2>
                    <hr class="categoryhr">
                  </div>
                <div class="row">

                 @foreach($categories as $category)
                  <a href="{{ route('categorybycountry', $category->id) }}">
                    <div class="col-lg-3">

                        <div class="categories_post">
                            <img src="{{('uploads/item/'.$category->image)}}" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="{{ route('categorybycountry', $category->id) }}"><h5 style="font-family: 'Farro', sans-serif;">{{$category->name}}</h5></a>
                                    <div class="border_line"></div>
                                    <p>{{$category->description}}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    </a>
                    @endforeach

                </div>
            </div>
        </section>
        <!--================Blog Categorie Area =================-->

        <!--================Latest Blog Area =================-->
    <section  style="background:#80808036">
      				<div class="container">
      					<div class="section-top-border">

      						<div class="row">
      							<div class="col-md-6">
      								<img src="uploads/item/about2.jpg" alt="" class="img-fluid" style="height:300px;width:100%;">
      							</div>
      							<div class="col-md-6 mt-sm-20 left-align-p">
                      <h3 style="color:black;font-family: 'Farro', sans-serif;">ABOUT US</h3>
                      <hr class="abouthr">
      								<p style="font-size:16px;color:black;">Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government.</p>
                      <a class="main_btn" href="#">Learn More</a>
      							</div>
      						</div>
      					</div>
      				</div>
     </section>

  <!--================End Latest Blog Area =================-->

  <!--================Blog Agency Area =================-->
          <section class="blog_categorie_area">
              <div class="container">
                    <div class="main_title" style="">
                      <h2 style="color:black;font-family: 'Farro', sans-serif;"> Agencies</h2>
                      <hr class="categoryhr">
                    </div>
                  {{-- <div class="row">



                 @foreach($agencyoffer as $agencyoffer)
                      <div class="col-lg-3">
                          <div class="categories_post">
                              <img src="{{URL::to('uploads/agency/'.$agencyoffer->image)}}" alt="post">
                              <div class="categories_details">
                                  <div class="categories_text">
                                  <a href="{{route('categoryByPost',$agencyoffer->user_id)}}"><h5>{{$agencyoffer->title}}</h5></a>
                                      <div class="border_line"></div>
                                      <p>{{$agencyoffer->subtitle}}</p>
                                  </div>
                              </div>
                          </div>
                      </div>

                      @endforeach

                  </div> --}}

                  <div class="row courses_inner">

                          <div class="grid_inner">

                              @foreach($agencyoffer as $agencyoffer)
                           <a href="{{route('categoryByPost',$agencyoffer->user_id)}}">
                              <div class="grid_item wd55 col-lg-4">
                                  <div class="courses_item">
                                      <img src="{{URL::to('uploads/agency/'.$agencyoffer->image)}}" alt="">

                                       <div class="overlay" style="background-color: rgba(0, 0, 0, 0.6);">
                                      <div class="hover_text" style="background-color: rgba(0, 0, 0, 0.6);" >




                                          <a href="{{route('categoryByPost',$agencyoffer->user_id)}}"><h4>{{$agencyoffer->title}}</h4></a>
                                          <ul class="list">
                                              {{-- <li><a href="#"><i class="lnr lnr-users"></i> 355</a></li>
                                              <li><a href="#"><i class="lnr lnr-bubble"></i> 35</a></li>
                                              <li><a href="#"><i class="lnr lnr-user"></i></a></li> --}}
                                          </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              </a>
                               @endforeach
                          </div>
                      </div>

              </div>
          </section>
          <!--================Blog Agency Area =================-->




@endsection
