@extends('layouts.frontend_layout')

@section('content')

<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content text-center">
          <h2>Student Apply </h2>

        </div>
      </div>
    </div>
  </section>

  <!--================End Home Banner Area =================-->
  @if ($errors->any())
       <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
       </div>
   @endif

   @if(session('successMsg'))

<div class="alert alert-dismissible alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>Well done!</strong> {{session('successMsg')}}

</div>
@endif

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
          <div class="card-header bg-info">
            <h4 class="m-b-0 text-white">Student Apply Form </h4>
          </div>
            <form class="form-horizontal mt-4" action="{{route('studentapply.store')}}" method="post" >
               {{csrf_field()}}

                <div class="form-group">
                    <label class="control-label">Full Name</label>

                        <input type="text" class="form-control" name="name" placeholder="Full name">

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

                <div class="form-group">

                  <input type="checkbox" id="basic_checkbox_2" class="filled-in" value="1" />
                  <label for="basic_checkbox_2">Active</label>
                </div>




                <div class="m-t-20 text-center">
                  <button class="btn btn-primary btn-lg">Publish Category</button>
              </div>

            </form>
           </div>
         </div>





@endsection
