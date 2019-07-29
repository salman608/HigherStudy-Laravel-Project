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
                <h4 class="card-title">Add Country</h4>
                <form class="form-horizontal" action="{{route('country.store')}}" method="post" enctype="multipart/form-data">
                   {{csrf_field()}}
                    <div class="form-group">
                        <label class="control-label col-lg-2">Country Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" placeholder="Country Name---">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Category Name</label>
                            <div class="col-md-10">
                              <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" name="category_id[]">

                               @foreach ($category as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                              </select>
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Country Image</label>
                        <div class="col-lg-10">
                            <input class="form-control" name="image" type="file">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Country Status</label>
                        <div class="col-lg-10">
                          <label class="radio-inline">
                              <input name="status"  type="checkbox" value="1"> Active
                          </label>

                        </div>
                    </div>

                    <div class="m-t-20 text-center">
                      <button class="btn btn-primary btn-lg">Publish Country</button>
                  </div>

                </form>
               </div>
             </div>
            </div>
      </div>


@endsection
