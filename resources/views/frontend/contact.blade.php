@extends('layouts.frontend_layout')

@section('content')
<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content text-center">
          <h2>Contact Us</h2>
          <div class="page_link">
            <a href="{{ URL::to('/') }}">Home</a>
            <a href="about-us.html">Contact</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container mb-5">

            	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12631.475752120765!2d90.31152354710726!3d23.873570778283447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c259fa853253%3A0xeb42feba436deb20!2sDaffodil+International+University%2C+Bangladesh!5e0!3m2!1sen!2sbd!4v1558594325054!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
                <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Dhaka, Bangladesh</h6>
                                <p>Daffodin international university</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">+8801725496104</a></h6>
                                <p>Mon to Fri 9am to 6 pm</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">support@HigherStudy.com</a></h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" action="{{ url('add/customer/data') }}" method="post" id="contactForm" novalidate="novalidate">
                          @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter PhoneNumber">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="description" id="description" rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

          <div class="load">
            <img src="{{ asset('load.gif') }}" alt="" class="img-fluid loading">
          </div>



@endsection
