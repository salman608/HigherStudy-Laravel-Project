@extends('layouts.admin_layout')
@section('admin_content')

<div class="row">
      <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="dash-widget dash-widget5">
              <span class="dash-widget-icon bg-success"><i class="fa fa-money" aria-hidden="true"></i></span>
              <div class="dash-widget-info">
                  <h3>$998</h3>
                  <span>Revenue</span>
              </div>
          </div>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="dash-widget dash-widget5">
              <span class="dash-widget-icon bg-info"><i class="fa fa-user-o" aria-hidden="true"></i></span>
              <div class="dash-widget-info">
                  <h3>1072</h3>
                  <span>Users</span>
              </div>
          </div>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="dash-widget dash-widget5">
              <span class="dash-widget-icon bg-warning"><i class="fa fa-files-o"></i></span>
              <div class="dash-widget-info">
                  <h3>72</h3>
                  <span>Projects</span>
              </div>
          </div>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="dash-widget dash-widget5">
              <span class="dash-widget-icon bg-danger"><i class="fa fa-tasks" aria-hidden="true"></i></span>
              <div class="dash-widget-info">
                  <h3>618</h3>
                  <span>Tasks</span>
              </div>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-12">
          <div class="card-box">
              <div id="bar-example"></div>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="panel">
              <div class="panel-heading text-center">
                  <h3 class="panel-title">Project Status</h3>
              </div>
              <div class="panel-body">
                  <div id="donutChart" class="rad-chart"></div>
              </div>

          </div>
      </div>
      <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="panel">
              <div class="panel-heading text-center">
                  <h3 class="panel-title">Product Status</h3>
              </div>
              <div class="panel-body">
                  <div id="areaChart" class="rad-chart"></div>
              </div>
          </div>
      </div>
      <div class="col-lg-4 col-md-12 col-xs-12">
          <div class="panel">
              <div class="panel-heading text-center">
                  <h3 class="panel-title">Task Status</h3>
              </div>
              <div class="panel-body">
                  <div id="area-chart" class="rad-chart"></div>
              </div>
          </div>
      </div>
  </div>




@endsection
