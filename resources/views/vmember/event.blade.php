@extends('layouts.gentelella')

@section('content')

  <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Event Table</h2>
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
                  <td>Berlangsung</td>
                  <td class="text-center">
                    <div class="btn-group" role="group" aria-label="...">
                      {{-- Button M --}}
                      <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="glyphicon glyphicon-eye-open"></i></button>

                      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                            </div>
                            <div class="modal-body">
                              <h4>Text in a modal</h4>
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
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                            </div>
                            <div class="modal-body">
                              <h4>Text in a modal</h4>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
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
