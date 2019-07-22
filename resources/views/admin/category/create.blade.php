@extends('layouts.admin_layout')
@section('admin_content')

<div class="content container-fluid">

    <div class="row">
        <!-- <div class="col-lg-12">
            <h4 class="page-title">Category Level</h4>
        </div> -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="card-title">Add Category</h4>
                <form class="form-horizontal" action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                   {{csrf_field()}}
                    <div class="form-group">
                        <label class="control-label col-lg-2">Category Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" placeholder="Category Name---">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Category Description</label>
                        <div class="col-lg-10">
                            <textarea rows="5" cols="5" class="form-control" placeholder="Enter text here" name="description"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Category Image</label>
                        <div class="col-lg-10">
                            <input class="form-control" name="image" type="file">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Category Status</label>
                        <div class="col-lg-10">
                          <label class="radio-inline">
                              <input name="status"  type="checkbox" value="1"> Active
                          </label>

                        </div>
                    </div>

                    <div class="m-t-20 text-center">
                      <button class="btn btn-primary btn-lg">Publish Category</button>
                  </div>

                </form>
               </div>
             </div>
            </div>
      </div>


@endsection
