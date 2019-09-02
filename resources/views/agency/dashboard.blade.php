@extends('layouts.agency_layout')
@section('agency_content')

Hello


   <div class="container-fluid">
     <div class="card-group">



                 <div class="card">
                     <div class="card-body">
                         <div class="row">
                             <div class="col-12">
                                 <h2 class="m-b-0"><i class="mdi mdi-briefcase-check text-info"></i>  3</h2>
                                 <h3 class=""></h3>
                                 <h6 class="card-subtitle">Total Post</h6></div>
                             <div class="col-12">
                                 <div class="progress">
                                     <div class="progress-bar bg-info" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- Column -->
                 <!-- Column -->
                 <div class="card">
                     <div class="card-body">
                         <div class="row">
                             <div class="col-12">
                                 <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i>  25</h2>
                                 <h3 class=""></h3>
                                 <h6 class="card-subtitle">Comments</h6></div>
                             <div class="col-12">
                                 <div class="progress">
                                     <div class="progress-bar bg-success" role="progressbar" style="width: 40%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- Column -->
                 <!-- Column -->
                 <div class="card">
                     <div class="card-body">
                         <div class="row">
                             <div class="col-12">
                                 <h2 class="m-b-0"><i class="mdi mdi-comment-processing"></i>  25</h2>
                                 <h3 class=""></h3>
                                 <h6 class="card-subtitle">Message</h6></div>
                             <div class="col-12">
                                 <div class="progress">
                                     <div class="progress-bar bg-primary" role="progressbar" style="width: 56%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- Column -->
                 <!-- Column -->
                 <div class="card">
                     <div class="card-body">
                         <div class="row">
                             <div class="col-12">
                                 <h2 class="m-b-0"><i class="mdi mdi-buffer text-warning"></i>   10</h2>
                                 <h3 class=""></h3>
                                 <h6 class="card-subtitle">Total Applycation</h6></div>
                             <div class="col-12">
                                 <div class="progress">
                                     <div class="progress-bar bg-warning" role="progressbar" style="width: 26%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>






    <div class="row">
                  <!-- Column -->
                  <div class="col-lg-4 col-xlg-3 col-md-5">
                      <div class="card"> <img class="card-img" src="@isset($agencyprofile->image){{URL::to('uploads/agency/'.$agencyprofile->image)}}@endisset" alt="Card image">
                          <div class="card-img-overlay card-inverse social-profile d-flex ">
                              <div class="align-self-center"> <img src="" class="img-circle" width="100">

                              </div>
                          </div>
                      </div>

                  </div>
                  <!-- Column -->
                  <!-- Column -->
                  <div class="col-lg-8 col-xlg-9 col-md-7">
                      <div class="card">
                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs profile-tab" role="tablist">
                              <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Agency Profile</a> </li>

                          </ul>
                          <!-- Tab panes -->
                          <div class="tab-content">
                              <div class="tab-pane active" id="home" role="tabpanel">
                                  <div class="card-body">
                                      <div class="profiletimeline">

                                          <div class="sl-item">
                                              <div class="sl-left"> </div>
                                              <div class="sl-right">
                                                  <div><a href="#" class="link"><strong>Agency Title:</strong> @isset($agencyprofile->title){{$agencyprofile->title}}@endisset</a>
                                                    <br>
                                                       <a href="#" class="link"><strong>Agency SubTitle:</strong> @isset($agencyprofile->subtitle){{$agencyprofile->subtitle}}@endisset</a>
                                                       <br>
                                                       <br>

                                                      <a href="{{route('agencyprofile.edit',Auth::user()->id)}}" class="btn btn-primary">Update Agency Profile</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!--second tab-->


                          </div>
                      </div>
                  </div>
                  <!-- Column -->
              </div>


   </div>

@endsection
