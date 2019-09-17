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
            <a href="{{ route('/') }}">Home</a>
            <a href="about-us.html"></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--================End Home Banner Area =================-->


  <section class="blog_area single-post-area p_120" style="padding-top:0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">


                        <div class="single-post row">
                            <div class="col-lg-12">
                                <div class="feature-img" style="text-align:center">
                                    <img class="img-fluid" src="{{URL::to('uploads/agencypost/'.$agencypost->image)}}" style="width:600px;" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3  col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">

                                        <a class="active" href="#">{{$agencypost->country}}</a>

                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">{{ $user->name }}<i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#">{{$agencypost->created_at->diffForHumans()}}<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">{{ $agencypost->view_count }}Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 blog_details">
                                <h2>{{$agencypost->university}}</h2>

                                <blockquote cite="http://">
                                    <h4>Requirment</h4>
                                    {{$agencypost->requirment}}
                                </blockquote>
                                <hr>

                                <p>
                                  <h4>Facilities</h4>
                                  {{$agencypost->facilities}}
                                </p>
                                <hr>
                                <p>
                                    <h4>Description</h4>
                                    {!!$agencypost->description!!}
                                </p>
                            </div>

                        </div>








                        {{-- <div class="comments-area">
                            <h4>02 Comments</h4>

                        </div> --}}

                        {{-- --------------- --}}

                        <div class="container">
    <div class="row">
        <div class="col-md-8 col-md">
            <div class="card card-default ">
                <div class="card-header">Comment Area</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form id="comment-form" method="post" action="" >
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="" >
                        <div class="row" style="padding: 10px;">
                            <div class="form-group">
                                <textarea class="form-control" name="comment" placeholder="Write something from your heart..!" rows="3" cols="90"></textarea>


                            </div>
                        </div>
                        <div class="row" style="padding: 0 10px 0 10px;">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary " style="width: 100%" name="submit">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>




    {{-- @push('css')
      <link rel="stylesheet" href="/css/bootstrap.min.css">

    @endpush --}}

    <div class="row">




         <div class="col-md-8 col-md">
            <div class="card card-default">
                <div class="card-header">Comments</div>

                <div class="card-body comment-container" >

                        <div class="card card-body bg-dark">
                            <i><b> salman </b></i>&nbsp;&nbsp;
                            <span>hi brother </span>
                            <div style="margin-left:10px;">
                                <a style="cursor: pointer;"  class="reply">Reply</a>&nbsp;
                                <a style="cursor: pointer;"  class="delete-comment"  >Delete</a>
                                <div class="reply-form">

                                    <!-- Dynamic Reply form -->

                                </div>


                                        <div class="card card-body bg-light">
                                            <i><b> dipu </b></i>&nbsp;&nbsp;
                                            <span> hi </span>
                                            <div style="margin-left:10px;">
                                                <a  style="cursor: pointer;" class="reply-to-reply" >Reply</a>&nbsp;<a  class="delete-reply" >Delete</a>
                                            </div>
                                            <div class="reply-to-reply-form">

                                                <!-- Dynamic Reply form -->

                                            </div>

                                        </div>


                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>



</div>







                        {{-- ------------------------ --}}

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
                                <img class="author_img rounded-circle" src="img/blog/author.png" alt="">
                                <h4>{{$agencyoffer->title}}</h4>
                                <p>{{$agencyoffer->email}}</p>
                                <div class="social_icon">
                                    <a href="{{$agencyoffer->facebook}}"><i class="fa fa-facebook"></i></a>
                                    <a href="{{$agencyoffer->twiter}}"><i class="fa fa-twitter"></i></a>
                                    <a href="{{$agencyoffer->website}}"><i class="fa fa-globe"></i></a>

                                </div>

                                <div class="br"></div>
                                @if(Auth::guard('student')->check())
                                <p>If you interest apply this offer please click </p>
                                <a href="#" class="btn"  data-toggle="modal" data-target=".bd-example-modal-lg" style="background:#04091e;color:white;">Apply Now</a>
                                @elseif(!Auth::guard('student')->check())
                                <p>Please login to apply</p>
                                @endif()
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



                         <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                             <div class="modal-header bg-info">
                          <h5 class="modal-title text-white" id="exampleModalLabel">Student Apply Form </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
                      </div>

                      <div class="modal-body">

                        <form class="form-horizontal mt-4" action="{{route('studentapply.store')}}" method="post" >
                           {{csrf_field()}}

                            <div class="form-group">
                                <label class="control-label">Full Name</label>

                                    <input type="text" class="form-control" name="name" placeholder="Full name">
                             </div>
                             <div class="form-group">

                                    <input type="hidden" class="form-control" name="agency_id" value={{$user->id}}>

                             </div>


                            <div class="form-group">
                                <label class="control-label ">Email</label>

                                    <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label class="control-label ">Mobile</label>

                                    <input type="text" class="form-control" name="mobile" placeholder="Phone number">
                            </div>
                            <div class="form-group">
                                <label class="control-label ">Date of Birth</label>

                                    <input type="text" class="form-control" name="birth" placeholder="Date of Birth">
                            </div>
                            <div class="form-group">
                                <label class="control-label ">Address</label>

                                    <input type="text" class="form-control" name="address" placeholder="Address">
                            </div>
                            <h4 class="text-info">SSC / O Level</h4>
                            <div class="form-group">
                                <label class="control-label ">School </label>

                                    <input type="text" class="form-control" name="s_degree" placeholder="SSC">
                            </div>
                            <div class="form-group">
                                <label class="control-label ">Year</label>

                                    <input type="text" class="form-control" name="s_year" placeholder="Passing year">
                            </div>
                            <div class="form-group">
                                <label class="control-label ">GPA</label>

                                    <input type="text" class="form-control" name="s_gpa" placeholder="SSC gpa">
                            </div>

                            <h4 class="text-info">HSC / A Level</h4>
                            <div class="form-group">
                                <label class="control-label ">HSC Level</label>

                                    <input type="text" class="form-control" name="h_degree" placeholder="HSC---">
                            </div>
                            <div class="form-group">
                                <label class="control-label ">Year</label>

                                    <input type="text" class="form-control" name="h_year" placeholder=" passing year">
                            </div>
                            <div class="form-group">
                                <label class="control-label ">GPA</label>

                                    <input type="text" class="form-control" name="h_gpa" placeholder="hsc gpa---">
                            </div>
                            <h4 class="text-info">Graduation</h4>
                            <div class="form-group">
                                <label class="control-label ">subject</label>

                                    <input type="text" class="form-control" name="g_degree" placeholder="CSE---">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Year</label>

                                    <input type="text" class="form-control" name="g_year" placeholder="Passing year">
                              </div>
                            <div class="form-group">
                                <label class="control-label">CGPA</label>

                                    <input type="text" class="form-control" name="g_cgpa" placeholder="CGPA">
                            </div>
                            <h4 class="text-info">Masters</h4>
                            <div class="form-group">
                                <label class="control-label ">Subject</label>

                                    <input type="text" class="form-control" name="m_degree" placeholder="CSE">
                            </div>
                            <div class="form-group">
                                <label class="control-label ">Year</label>

                                    <input type="text" class="form-control" name="m_year" placeholder="Pasing year">
                            </div>
                            <div class="form-group">
                                <label class="control-label ">CGPA</label>

                                    <input type="text" class="form-control" name="m_cgpa" placeholder="cgpa---">
                            </div>
                            <h4 class="text-info">Ielts information</h4>

                            <div class="form-group">
                                <label class="control-label ">Ielts</label>

                                    <input type="text" class="form-control" name="ielts" placeholder="IELTES---">
                            </div>


                            <div class="form-group">
                                <label class="control-label ">Year</label>

                                    <input type="text" class="form-control" name="i_year" placeholder="year---">
                            </div>

                            <div class="form-group">
                                <label class="control-label ">Score</label>

                                    <input type="text" class="form-control" name="i_score" placeholder="score---">
                            </div>

                            <div class="form-group">
                                <label class="control-label ">Country</label>

                                    <input type="text" class="form-control" name="country" placeholder="Where you go now---">
                            </div>

                            <div class="form-group">
                                <label class="control-label ">Preferred Degree</label>

                                    <input type="text" class="form-control" name="preferdegree" placeholder="Chose Degree---">
                            </div>

                            <div class="m-t-20 text-center">
                              <button class="btn btn-primary btn-lg" type="submit">Publish Category</button>
                          </div>

                        </form>
                     </div>

                    </div>
                     </div>
                     </div>




                        </div>
                    </div>
                </div>
            </div>
        </section>



  @endsection
