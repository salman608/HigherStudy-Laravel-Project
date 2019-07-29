@extends('layouts.frontend_layout')

@section('content')

<!--================Home Banner Area =================-->
<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content text-center">
          <h2>About Us</h2>
          <div class="page_link">
            <a href="index.html">Home</a>
            <a href="about-us.html">About</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--================End Home Banner Area =================-->

  <!--================About Area =================-->
 <section class="about_area p_120" style="padding-bottom:50px;">
   <div class="container">
     <div class="main_title">
       <h2>Goals to Achieve for the leadership</h2>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
     </div>
     <div class="row about_inner">
       <div class="col-lg-6">
         <div class="accordion" id="accordionExample">
           <div class="card">
             <div class="card-header" id="headingOne">
               <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 Success
                 <i class="lnr lnr-chevron-down"></i>
                 <i class="lnr lnr-chevron-up"></i>
               </button>
             </div>

             <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
               <div class="card-body">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
               </div>
             </div>
           </div>
           <div class="card">
             <div class="card-header" id="headingTwo">
               <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                 Info
                 <i class="lnr lnr-chevron-down"></i>
                 <i class="lnr lnr-chevron-up"></i>
               </button>
             </div>
             <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
               <div class="card-body">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
               </div>
             </div>
           </div>
           <div class="card">
             <div class="card-header" id="headingThree">
               <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                 Danger
                 <i class="lnr lnr-chevron-down"></i>
                 <i class="lnr lnr-chevron-up"></i>
               </button>
             </div>
             <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
               <div class="card-body">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
               </div>
             </div>
           </div>
           <div class="card">
             <div class="card-header" id="headingfour">
               <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                 Warning
                 <i class="lnr lnr-chevron-down"></i>
                 <i class="lnr lnr-chevron-up"></i>
               </button>
             </div>
             <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
               <div class="card-body">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="col-lg-6">
         <div class="video_area" id="video">
           <img class="img-fluid" src="{{asset('frontend/img/video-1.jpg')}}" alt="">
           <a class="popup-youtube" href="https://www.youtube.com/watch?v=VufDd-QL1c0">
             <img src="{{asset("frontend/img/icon/video-icon-1.png")}}" alt="">
           </a>
         </div>
       </div>
     </div>
     <div class="about_details">

     </div>
   </div>
 </section>
 <!--================End About Area =================-->

 <!--================Team Area =================-->
 <section class="team_area p_120">
   <div class="container">
     <div class="main_title">
       <h2>Meet Our Faculty</h2>
       <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
     </div>
     <div class="row team_inner">
       <div class="col-lg-3 col-sm-6">
         <div class="team_item">
           <div class="team_img">
             <img class="rounded-circle" src="{{asset('frontend/img/team/team.jpg')}}" alt="">
             <div class="hover">
               <a href="#"><i class="fa fa-facebook"></i></a>
               <a href="#"><i class="fa fa-twitter"></i></a>
               <a href="#"><i class="fa fa-linkedin"></i></a>
             </div>
           </div>
           <div class="team_name">
             <h4>Salman Rahman</h4>
             <p>Designer & Developer</p>
           </div>
         </div>
       </div>
       <div class="col-lg-3 col-sm-6">
         <div class="team_item">
           <div class="team_img">
             <img class="rounded-circle" src="{{asset('frontend/img/team/team11.jpg')}}" alt="">
             <div class="hover">
               <a href="#"><i class="fa fa-facebook"></i></a>
               <a href="#"><i class="fa fa-twitter"></i></a>
               <a href="#"><i class="fa fa-linkedin"></i></a>
             </div>
           </div>
           <div class="team_name">
             <h4>Mahadi Hasan</h4>
             <p>Ideologist</p>
           </div>
         </div>
       </div>
       <div class="col-lg-3 col-sm-6">
         <div class="team_item">
           <div class="team_img">
             <img class="rounded-circle" src="{{asset('frontend/img/team/team-1.jpg')}}" alt="">
             <div class="hover">
               <a href="#"><i class="fa fa-facebook"></i></a>
               <a href="#"><i class="fa fa-twitter"></i></a>
               <a href="#"><i class="fa fa-linkedin"></i></a>
             </div>
           </div>
           <div class="team_name">
             <h4>Maksudur Rahman</h4>
             <p>Data Scientinse</p>
           </div>
         </div>
       </div>
       <div class="col-lg-3 col-sm-6">
         <div class="team_item">
           <div class="team_img">
             <img class="rounded-circle" src="{{asset('frontend/img/team/team-4.jpg')}}" alt="">
             <div class="hover">
               <a href="#"><i class="fa fa-facebook"></i></a>
               <a href="#"><i class="fa fa-twitter"></i></a>
               <a href="#"><i class="fa fa-linkedin"></i></a>
             </div>
           </div>
           <div class="team_name">
             <h4>Mahfujur rahman (raju)</h4>
             <p>Project Advisor</p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!--================End Team Area =================-->





@endsection
