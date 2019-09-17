@extends('layouts.frontend_layout')

@section('content')

<!--================Home Banner Area =================-->
<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content text-center">
          <h2>{{$agencyoffer->title}}</h2>
          <div class="page_link">
            <a href="index.html">Home</a>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!--================End Home Banner Area =================-->

  <!--================Blog Area =================-->
        <section class="blog_area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">

                          @foreach($agencypost as $agencypost)
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <div class="post_tag">

                                            <a class="active" href="#">{{$agencypost->country}}</a>

                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">{{ $user->name}}<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">{{$agencypost->created_at->diffForHumans()}}<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">{{ $agencypost->view_count }}   view<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">

                                        <div class="blog_details">
                                            <a href="single-blog.html"><h2>{{$agencypost->university}}</h2></a>
                                            <p>{{$agencypost->requirment}}</p>
                                            <a href="{{ route('agencypost', $agencypost->id) }}" class="white_bg_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            @endforeach


                            <nav class="blog-pagination justify-content-center d-flex">
		                        <ul class="pagination">
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>
		                            <li class="page-item"><a href="#" class="page-link">01</a></li>

		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
		                        </ul>
		                    </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Posts">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                <div class="br"></div>
                            </aside>


                            <aside class="single_sidebar_widget author_widget">
                                <img class="author_img rounded-circle" style="weidth:80px;height:80px;" src="{{URL::to('uploads/agency/'.$agencyoffer->image)}}" alt="" >
                                <h4>{{$agencyoffer->title}}</h4>
                                <p>{{$agencyoffer->email}}</p>
                                <div class="social_icon">
                                    <a href="{{$agencyoffer->facebook}}"><i class="fa fa-facebook"></i></a>
                                    <a href="{{$agencyoffer->twiter}}"><i class="fa fa-twitter"></i></a>
                                    <a href="{{$agencyoffer->website}}"><i class="fa fa-globe"></i></a>
                                    <a href="#"><i class="fa fa-envelope-o"></i></a>
                                </div>

                                <div class="br"></div>
                            </aside>




                            <aside class="single_sidebar_widget ads_widget">
                                <a href="#"><img class="img-fluid" src="frontend/img/blog/add.jpg" alt=""></a>
                                <div class="br"></div>
                            </aside>

                            <aside class="single-sidebar-widget newsletter_widget">
                                <h4 class="widget_title">Newsletter</h4>
                                <p>
                                Here, I focus on a range of items and features that we use in life without
                                giving them a second thought.
                                </p>
                                <div class="form-group d-flex flex-row">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                    </div>
                                    <a href="#" class="bbtns">Subcribe</a>
                                </div>
                                <p class="text-bottom">You can unsubscribe at any time</p>
                                <div class="br"></div>
                            </aside>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->



  @endsection
