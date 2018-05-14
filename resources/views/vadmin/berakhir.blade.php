@extends('layouts.gentelella')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Berakhir Event</h2>
      <ul class="nav navbar-right panel_toolbox">

      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div id="datatable-responsive_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
        <div class="row">
          <div class="col-sm-6">
            <div class="dataTables_length" id="datatable-responsive_length">

            </div>
          </div>
          <div class="col-sm-6">
            <div id="datatable-responsive_filter" class="dataTables_filter">

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-responsive_info" style="width: 100%;" width="100%" cellspacing="0">
              <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 73px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">No</th>
                  <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 71px;" aria-label="Last name: activate to sort column ascending">Nama Event</th>
                  <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 152px;" aria-label="Position: activate to sort column ascending">Tanggal Mulai</th>
                  <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 67px;" aria-label="Office: activate to sort column ascending">Tanggal Selesai</th>
                  <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 29px;" aria-label="Age: activate to sort column ascending">UKM penyelenggara</th>
                  <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 67px;" aria-label="Start date: activate to sort column ascending">Kontak</th>
                  <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 46px;" aria-label="Salary: activate to sort column ascending">Status</th>
                  <th aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 36px;">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($event as $key)
                <tr role="row" class="odd">
                  <td tabindex="0" class="sorting_1"><?php echo $no++; ?></td>
                  <td><?php echo $key->nama; ?></td>
                  <td><?php echo $key->tanggal_mulai; ?></td>
                  <td><?php echo $key->tanggal_selesai; ?></td>
                  <td><?php echo $key->nama; ?></td>
                  <td><?php echo $key->kontak; ?></td>
                  <td><?php echo $key->status; ?></td>
                  <td></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-7">
            <div class="dataTables_paginate paging_simple_numbers" id="datatable-responsive_paginate">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
