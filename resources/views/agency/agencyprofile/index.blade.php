@extends('layouts.agency_layout')
@section('agency_content')


<div class="row">

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
    <div class="col-md-12"><h2>Agency Profile</h2>

        <div class="row mtl">
            <div class="col-md-3">
                <div class="form-group">
                    <div class="text-center mbl"><img src="http://lorempixel.com/640/480/business/1/" alt="" class="img-responsive"/></div>
                    <div class="text-center mbl"></div>
                </div>
                <table class="table table-striped table-hover">

                    <tbody>
                    <tr>
                        <td>Agency Name</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><span class="label label-success">Active</span></td>
                    </tr>


                    </tbody>

                </table>
            </div>
            <div class="col-md-9">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-edit" data-toggle="tab">Add Agency  Profile</a></li>
                    <li><a href="#tab-messages" data-toggle="tab">Edit Agency Profile</a></li>
                </ul>
                <div id="generalTabContent" class="tab-content">
                    <div id="tab-edit" class="tab-pane fade in active">

                    

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection
