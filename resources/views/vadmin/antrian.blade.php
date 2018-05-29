@extends('layouts.gentelella')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Antrian Event</h2>
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
                  <td><?php echo $key->nama_ukm; ?></td>
                  <td><?php echo $key->kontak; ?></td>
                  <td><?php echo $key->status; ?></td>
                  <td>
                    <!-- <a href="#"><span class="label label-info"><i class="glyphicon-eye-close"></i>&nbsp;Lihat event</a> -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-detail-modal-lg">Detail</button>
                  </td>
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

{{-- EDIT MODAL --}}
<div class="modal fade bs-detail-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title text-center" id="myModalLabel" ><i class="fa fa-pencil"></i> Detail Event</h4>
      </div>
      <div class="modal-body">
        {{-- modal content --}}
        <div class="x_panel">
          <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Event</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" placeholder="nama event" required="required">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Lokasi</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" placeholder="lokasi" required="required">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <form class="form-horizontal">
                    <fieldset>
                      <div class="control-group">
                        <div class="controls">
                          <div class="input-prepend input-group">
                            <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                            <input type="text" style="width: 200px" name="reservation" id="reservation" class="form-control" value="01/01/2016 - 01/25/2016" required="required" />
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi Event</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea class="form-control" rows="3" placeholder='Type here'></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Kontak</label>
                  <div class="col-md-6 col-sm-9 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="inputSuccess5" placeholder="Phone" required="required">
                    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">File Poster</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="x_content">
                      <form action="form_upload.html" class="dropzone"></form>
                      <br />
                    </div>
                  </div>
                </div>

                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        {{-- end modal content --}}
      </div>
    </div>
  </div>
</div>

@endsection
