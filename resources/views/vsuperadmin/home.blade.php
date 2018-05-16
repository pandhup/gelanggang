@extends('layouts.gentelella')

@section('content')
<div class="x_panel">
  <div class="x_content">
    <br />
    <!-- top tiles -->
      <div class="row align-items-center justify-content-center tile_count text-center">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i>Jumlah Admin</span>
          <div class="count">2500</div>
          <span class="count_bottom"><i class="green">4% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-clock-o"></i>Jumlah Member</span>
          <div class="count">123.50</div>
          <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i>Jumlah Event</span>
          <div class="count green">2,500</div>
          <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i>Jumlah Event Bulan Ini</span>
          <div class="count">4,567</div>
          <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
        </div>
      </div>
    <!-- /top tiles -->
  </div>
</div>
@endsection
