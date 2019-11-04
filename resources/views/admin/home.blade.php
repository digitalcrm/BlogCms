@extends('admin.layouts.app')

@section('main-content')

<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Blank page
      <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
  </section>

  <section class="content">
    <!--Count Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info" style="background-color:#17a2b8">
          <div class="inner">
            <h3>{{ $published_post_count }}</h3>

            <p>Total Posts</p>
          </div>
          <div class="icon">
            <i class="fa fa-newspaper-o" aria-hidden="true"></i>
          </div>
          <a href="#" class="small-box-footer">Posts Info <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success" style="background-color: #28a745">
          <div class="inner">
            <h3>{{ $published_Tag_count }}<sup style="font-size: 20px"></sup></h3>

            <p>Total Tags</p>
          </div>
          <div class="icon">
            <i class="fa fa-tag" aria-hidden="true"></i></i>
          </div>
          <a href="#" class="small-box-footer">Tags Info <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning" style="background-color: #ffc107">
          <div class="inner">
            <h3>{{ $published_category_count }}</h3>

            <p>Total Categories</p>
          </div>
          <div class="icon">
            <i class="fa fa-list-alt" aria-hidden="true"></i></i>
          </div>
          <a href="#" class="small-box-footer">Category Info<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger" style="background-color: #dc3545">
          <div class="inner">
            <h3>{{ $user_count }}</h3>

            <p>Total Users</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">Users Info<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row end -->
    <!-- Main row -->
    <div class="row">
      <!--For left column-->
      <section class="col-lg-7 connectedSortable">
        <!--Bar Chart-->
        <div><h3>Bar Charts</h3>
          <div style="width: 100%;">{!! $chart->container() !!}</div>
        </div>
         <!-- Calendar -->
        <div class="box box-solid bg-green-gradient">
          <div class="box-header">
            <i class="fa fa-calendar"></i>
            <h3 class="box-title">
              Calendar
            </h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
              <!-- button with a dropdown -->
              <div class="btn-group">
                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bars" aria-hidden="true"></i></button>
                  <div class="dropdown-menu float-right" role="menu">
                    <a href="#" class="dropdown-item">Add new event</a>
                    <a href="#" class="dropdown-item">Clear events</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">View calendar</a>
                  </div>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                  <i class="fa fa-minus" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                  <i class="fa fa-times" aria-hidden="true"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.card-body -->
          </div>

        </section>


        <!--For Right colum-->

        <section class="col-lg-5 connectedSortable">
         
          <!--Char-->
          <div><h3>Doughnut Charts</h3>
            <div style="width: 100%;">{!! $linechart->container() !!}</div>
          </div>
          <!-- /.card -->  
        </section>
      </div><!--end div other-->      
    </section>
  </div>


  @endsection()