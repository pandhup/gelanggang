@extends('layouts.gentelella')

@section('content')

  <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Event Table</h2>
          @yield('create')
          <ul class="nav navbar-right panel_toolbox">
            <button type="button" class="btn btn-md btn-success" data-toggle="modal" data-target=".bs-create-modal-lg"><i class="glyphicon glyphicon-plus"></i> Create</button>

            <div class="modal fade bs-create-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-md">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title text-center" id="myModalLabel" ><i class="fa fa-check-square-o"></i> Create Event</h4>
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

          </ul>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">

          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead class="text-center">
              <tr>
                <td>No.</td>
                <td>Nama Event</td>
                <td>Tanggal Event</td>
                <td>Lokasi</td>
                <td>Status</td>
                <td></td>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td class="text-center">1</td>
                  <td>Web Gelanggang</td>
                  <td>1 Januari 2018</td>
                  <td>Gedung Gelanggang</td>
                  <td class="text-center">Berlangsung <span class="glyphicon glyphicon-ok" style="color:#00FF00;"></span></td>
                  <td class="text-center">
                    <div class="btn-group" role="group" aria-label="...">
                      {{-- Button M --}}
                      <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="glyphicon glyphicon-eye-open"></i></button>

                      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel"><i class="fa fa-eye"></i> Detail Event</h4>
                            </div>
                            <div class="modal-body">
                              @yield('viewmodal')
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      {{-- Button M --}}
                      <div class="modal fade bs-example1-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                              </button>
                              <h4 class="modal-title text-center" id="myModalLabel" ><i class="fa fa-pencil"></i> Edit Event</h4>
                            </div>
                            <div class="modal-body">
                              {{-- modal content --}}

                              {{-- end modal content --}}
                          </div>
                        </div>
                      </div>

                    </ul>
                    <div class="clearfix"></div>
                  </div>

                      <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target=".bs-example1-modal-lg"><i class="glyphicon glyphicon-pencil"></i></button>

                    </div>
                  </td>
                </tr>
            </tbody>
          </table>


        </div>
      </div>
    </div>

@endsection
