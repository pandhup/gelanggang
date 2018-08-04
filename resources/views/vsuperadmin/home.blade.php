@extends('layouts.gentelella')

@section('content')
<div class="x_panel">
  <div class="x_content">
    <br />
    <!-- top tiles -->
      <div class="row align-items-center justify-content-center tile_count text-center">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i>Admin</span>
          <div class="count">{{$admin}}</div>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-laptop"></i>Member</span>
          <div class="count">{{$member}}</div>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-check-square-o"></i>Total Event</span>
          <div class="count green">{{$event}}</div>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-check-square-o"></i>Event Bulan Ini</span>
          <div class="count">{{$eventthismonth}}</div>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-check-square-o"></i>Event Berlangsung</span>
          <div class="count">{{$eventbaru}}</div>
        </div>
      </div>
    <!-- /top tiles -->
  </div>
</div>
@endsection
