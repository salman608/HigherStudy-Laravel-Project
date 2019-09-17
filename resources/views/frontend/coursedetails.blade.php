@extends('layouts.frontend_layout')

@section('content')

<!--================Home Banner Area =================-->

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">

      <div class="container">
        <div class="banner_content text-center">
          <h2>Course Details</h2>
          <div class="page_link">
            <a href="">Home</a>
            <a href="about-us.html">Country</a>
            <a href="about-us.html">University</a>
            <a href="about-us.html">Department</a>
            <a href="about-us.html">CourseDetails</a>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!--================End Home Banner Area =================-->

    <!--================Course Details Area =================-->

    
   <section class="course_details_area p_120">
     <div class="container">
       <div class="row course_details_inner">
         <div class="col-lg-7">
           <div class="c_details_img">
             <img class="img-fluid" src="{{URL::to('uploads/university/'.$university->image)}}" alt="">
           </div>

         </div>

         <div class="col-lg-5">
           <div class="c_details_list">
             <ul class="list">
               <li>
                 <a >University Name
                   <span>{{ $university->name }}</span></a>
               </li>
               <li>
                 <a >Department Name
                   <span>{{ $department->name }}</span></a>
               </li>
               <li>
                 <a >University Rank
                   <span>{{ $university->rank }}</span></a>
               </li>
               <li>
                 <a href="#">Course Fee
                   <span>{{ $course->course_fee }}</span></a>
               </li>
               <li>
                 <a href="#">Total Seats
                   <span>{{ $course->Seat }}</span></a>
               </li>
               <li>
                 <a href="#">Applycation Deadline
                   <span>{{ $course->date }}</span></a>
               </li>
             </ul>
             <a class="main_btn" href="{{$course->app_link}}" target="_blank">Apply Now</a>
           </div>
         </div>
       </div>
     </div>
   </section>

   <section class="course_details_area p_120" style="padding-top:0px;">

     <div class="container">
       <div class="row course_details_inner">

         <ul class="nav nav-tabs" id="myTab" role="tablist">
           <li class="nav-item">
             <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Applicacation Process</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Requirement</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Professor</a>
           </li>

           <li class="nav-item">
             <a class="nav-link" id="Financial-tab" data-toggle="tab" href="#Financial" role="tab" aria-controls="Financial" aria-selected="false">Financial Projection</a>
           </li>

           <li class="nav-item">
             <a class="nav-link" id="scholarship-tab" data-toggle="tab" href="#scholarship" role="tab" aria-controls="scholarship" aria-selected="false">Scholarship process</a>
           </li>

           <li class="nav-item">
             <a class="nav-link" id="accommodation-tab" data-toggle="tab" href="#accommodation" role="tab" aria-controls="accommodation" aria-selected="false">Accommodation</a>
           </li>


         </ul>





         <div class="tab-content" id="myTabContent">
          <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="objctive_text">
              {!! $course->apply_process !!}
            </div>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="objctive_text">
              {!! $course->requirment !!}
            </div>
          </div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="objctive_text">

             {!! $course->professor !!}

            </div>
          </div>

          <div class="tab-pane fade" id="Financial" role="tabpanel" aria-labelledby="Financial-tab">
            <div class="objctive_text">

              {!! $course->financial !!}

            </div>
          </div>

          <div class="tab-pane fade" id="scholarship" role="tabpanel" aria-labelledby="scholarship-tab">
            <div class="objctive_text">

             {!! $course->schoolarship !!}

            </div>
          </div>

          <div class="tab-pane fade" id="accommodation" role="tabpanel" aria-labelledby="accommodation-tab">
            <div class="objctive_text">

              {!! $course->accomodation !!}

            </div>
          </div>

       </div>
     </div>

   </section>



   <!--================End Course Details Area =================-->




@endsection
