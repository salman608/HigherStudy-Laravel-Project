@extends('layouts.admin_layout')
@section('admin_content')

<div class="row">
      <div class="col-lg-12">
          <div class="card-box">
              <div class="card-block">
                 <h6 class="card-title text-bold">All Course Details</h6>
                 <div class="table-responsive">


                 <table id="example" class="table display datatable table-striped table-bordered
                 " style="width:100%">
                 <thead>
                     <tr>
                         <th>ID</th>
                         <th>Uni Name</th>
                         <th>Dname</th>
                         <th>fee</th>
                         <th>seats</th>
                         <th>Deadline</th>
                         <th>Link</th>
                         <th>Applycation</th>
                         <th>Requirment</th>
                         <th>professor</th>
                         <th>Financial</th>
                         <th>Schoolarship</th>
                         <th>Accommodation</th>
                         <th>Action</th>

                     </tr>
                 </thead>
                 <tbody>

                 @foreach ($courses as $key => $course)


                 <tr>

                     <td>{{ $course->id }}</td>
                     <td>
                       @foreach($universities as $university)
                       {{$university->name }},
                       @endforeach
                    </td>

                     <td>
                       @foreach($departments as $department)
                       {{$department->name }},
                       @endforeach
                     </td>

                     <td>{{ $course->course_fee }}</td>
                     <td>{{ $course->Seat }}</td>
                     <td>{{ $course->date }}</td>
                     <td> {{substr(strip_tags($course->app_link),0,20) }}{{strlen(strip_tags($course->app_link)) > 20 ? "..." : ""}}</td>
                     <td> {{substr(strip_tags($course->apply_process),0,20) }}{{strlen(strip_tags($course->apply_process)) > 20 ? "..." : ""}}</td>
                     <td> {{substr(strip_tags($course->requirment),0,20) }}{{strlen(strip_tags($course->requirment)) > 20 ? "..." : ""}}  </td>
                     <td> {{substr(strip_tags($course->professor),0,20) }}{{strlen(strip_tags($course->professor)) > 20 ? "..." : ""}}   </td>
                     <td> {{substr(strip_tags($course->financial),0,20) }}{{strlen(strip_tags($course->financial)) > 20 ? "..." : ""}}</td>
                     <td> {{substr(strip_tags($course->schoolarship),0,20) }}{{strlen(strip_tags($course->schoolarship)) > 20 ? "..." : ""}}  </td>
                     <td>{{substr(strip_tags($course->accomodation),0,20) }}{{strlen(strip_tags($course->accomodation)) > 20 ? "..." : ""}}  </td>

                     <td><a class="btn btn-warning" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye"></i></a>

                     </td>
                 </tr>
                @endforeach
          </table>
                 </div>
              </div>
          </div>
    </div>
 </div>


 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>



@endsection
