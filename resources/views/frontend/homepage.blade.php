@extends('layouts.frontend_layout')

@section('content')

<!--================Home Banner Area =================-->
<section class="home_banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
      <div class="banner_content text-center">
        <h3>We Ensure better education <br />for a better world</h3>
        <p>In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble.</p>
        <a class="main_btn" href="#">Get Started</a>
      </div>
    </div>
  </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Blog Categorie Area =================-->
        <section class="blog_categorie_area">
            <div class="container">
                  <div class="main_title" style="margin-top:-160px;">
                    <h2>Catagory Study in Abrode</h2>
                  </div>
                <div class="row">

                 @foreach($categories as $category)

                    <div class="col-lg-3">
                        <div class="categories_post">
                            <img src="{{('uploads/item/'.$category->image)}}" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="{{ route('categorybycountry', $category->id) }}"><h5>{{$category->name}}</h5></a>
                                    <div class="border_line"></div>
                                    <p>{{$category->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!--================Blog Categorie Area =================-->

        <!--================Latest Blog Area =================-->
  <section class="latest_blog_area p_120">
    <div class="container">
      <div class="main_title">
        <h2>Latest Posts From Blog</h2>
        <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
      </div>
      <div class="row latest_blog_inner">
        <div class="col-lg-3 col-md-6">
          <div class="l_blog_item">
            <img class="img-fluid" src="frontend/img/latest-blog/l-blog-1.jpg" alt="">
            <a class="date" href="#">25 October, 2018 | By Mark Wiens</a>
            <a href="single-blog.html">
              <h4>Addiction When Gambling Becomes A Problem</h4>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="l_blog_item">
            <img class="img-fluid" src="frontend/img/latest-blog/l-blog-2.jpg" alt="">
            <a class="date" href="#">25 October, 2018 | By Mark Wiens</a>
            <a href="single-blog.html">
              <h4>Addiction When Gambling Becomes A Problem</h4>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="l_blog_item">
            <img class="img-fluid" src="frontend/img/latest-blog/l-blog-3.jpg" alt="">
            <a class="date" href="#">25 October, 2018 | By Mark Wiens</a>
            <a href="single-blog.html">
              <h4>Addiction When Gambling Becomes A Problem</h4>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="l_blog_item">
            <img class="img-fluid" src="frontend/img/latest-blog/l-blog-4.jpg" alt="">
            <a class="date" href="#">25 October, 2018 | By Mark Wiens</a>
            <a href="single-blog.html">
              <h4>Addiction When Gambling Becomes A Problem</h4>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Latest Blog Area =================-->

  <!--================Blog Agency Area =================-->
          <section class="blog_categorie_area">
              <div class="container">
                    <div class="main_title" style="margin-top:-160px;">
                      <h2>Largest Agency in our Country</h2>
                    </div>
                  <div class="row">
                      <div class="col-lg-3">
                          <div class="categories_post">
                              <img src="frontend/img/blog/cat-post/cat-post-3.jpg" alt="post">
                              <div class="categories_details">
                                  <div class="categories_text">
                                      <a href="blog-details.html"><h5>Social Life</h5></a>
                                      <div class="border_line"></div>
                                      <p>Enjoy your social life together</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3">
                          <div class="categories_post">
                              <img src="frontend/img/blog/cat-post/cat-post-2.jpg" alt="post">
                              <div class="categories_details">
                                  <div class="categories_text">
                                      <a href="blog-details.html"><h5>Politics</h5></a>
                                      <div class="border_line"></div>
                                      <p>Be a part of politics</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3">
                          <div class="categories_post">
                              <img src="frontend/img/blog/cat-post/cat-post-1.jpg" alt="post">
                              <div class="categories_details">
                                  <div class="categories_text">
                                      <a href="blog-details.html"><h5>Food</h5></a>
                                      <div class="border_line"></div>
                                      <p>Let the food be finished</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3">
                          <div class="categories_post">
                              <img src="frontend/img/blog/cat-post/cat-post-1.jpg" alt="post">
                              <div class="categories_details">
                                  <div class="categories_text">
                                      <a href="blog-details.html"><h5>Nature</h5></a>
                                      <div class="border_line"></div>
                                      <p>Let the food be finished</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!--================Blog Agency Area =================-->

          <!--================Impress Area =================-->
        <section class="impress_area p_120">
          <div class="container">
            <div class="impress_inner text-center">
              <h2>Become an instructor</h2>
              <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station whether that is on the deck</p>
              <a class="main_btn2" href="#">Apply for Scholarship</a>
            </div>
          </div>
        </section>
  <!--================End Impress Area =================-->


@endsection
