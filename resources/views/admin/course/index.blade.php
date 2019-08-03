@extends('layouts.admin_layout')
@section('admin_content')

<div class="row">
      <div class="col-lg-12">
          <div class="card-box">
              <div class="card-block">
                 <h6 class="card-title text-bold">All University Details</h6>
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

                     <td class="text-right">
                                            <div class="dropdown">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="{{route('course.edit',$course->id)}}"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>

                                                    <form id="delete-form-{{ $course->id }}" action="{{route('course.destroy',$course->id)}}" method="POST" style="display:none;">
                                                    @csrf
                                                    @method('DELETE')

                                                  </form>

                                                    <li><button type="button" name="button" onclick="if(confirm('Are you sure? You want to delete this?'))
                                                    {
                                                      event.preventDefault();
                                                      document.getElementById('delete-form-{{ $course->id }}').submit();
                                                    }else{
                                                      event.preventDefault();
                                                    }"><i class="fa fa-trash"></i></button></li>

                                                    <li><a href="#" title="Edit" data-toggle="modal" data-target="#edit_ticket"><i class="fa fa-eye m-r-5"></i> View</a></li>


                                                </ul>
                                            </div>
                                        </td>
                 </tr>
                @endforeach
          </table>
                 </div>
              </div>
          </div>
    </div>
 </div>





  <!-- edit modal -->

  <div id="edit_ticket" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-content modal-lg">
                    <div class="modal-header">
                        <h2 class="modal-title">View University Details</h2>
                    </div>
                    <div class="modal-body">

                      <h4>Total  Cost:  {{ $course->course_fee }}</h4>
                      <h4>Total Seat:   {{ $course->Seat }}</h4>
                      <h4>Applycation Dateline:  {{ $course->date }}</h4>

                      <blockquote cite="http://">
                        <h4>Applycation Process</h4>

                         {{substr(strip_tags($course->apply_process),0,500) }}{{strlen(strip_tags($course->apply_process)) > 500 ? "..." : ""}}

                      </blockquote>
                      <hr style="padding-bottom:2px solid yellow;">

                      <blockquote cite="http://">
                        <h4>University Requirment</h4>
                            {{substr(strip_tags($course->requirment),0,500) }}{{strlen(strip_tags($course->requirment)) > 500 ? "..." : ""}}
                      </blockquote>
                      <hr>

                      <blockquote cite="http://">
                        <h4>University Schoolarship</h4>

                            {{substr(strip_tags($course->schoolarship),0,500) }}{{strlen(strip_tags($course->schoolarship)) > 500 ? "..." : ""}}
                      </blockquote>
                      <hr>

                      <blockquote cite="http://">
                        <h4>University Accomodation</h4>
                          {{substr(strip_tags($course->accomodation),0,500) }}{{strlen(strip_tags($course->accomodation)) > 500 ? "..." : ""}}
                      </blockquote>



                    </div>
                </div>
            </div>





@endsection
