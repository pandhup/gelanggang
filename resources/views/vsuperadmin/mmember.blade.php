@extends('layouts.gentelella')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Data Member</h2>
      <ul class="nav navbar-right panel_toolbox">
        <button type="button" class="btn btn-md btn-success" data-toggle="modal" data-target=".bs-create-modal-lg"><i class="glyphicon glyphicon-plus"></i> Create</button>
        {{-- dibawah --}}
      </ul>
      <div class="clearfix"></div>
      <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama UKM</th>
              <th>Email</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Forkom</td>
              <td>ukm@gmail.com</td>
              <td>
                <div class="btn-group" role="group" aria-label="...">
                  <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="glyphicon glyphicon-eye-open"></i></button>

                  <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bs-example1-modal-lg"><i class="glyphicon glyphicon-pencil"></i></button>

                  <a href="#" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>

                </div>
              </td>
            </tr>
          </tbody>
        </table>


      </div>
    </div>
  </div>
</div>

@endsection
