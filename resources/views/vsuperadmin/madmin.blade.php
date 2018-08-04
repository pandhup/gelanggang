@extends('layouts.gentelella')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Data Admin</h2>
      <ul class="nav navbar-right panel_toolbox">
        <button type="button" class="btn btn-md btn-success" data-toggle="modal" data-target=".bs-create-modal-lg"><i class="glyphicon glyphicon-plus"></i> Tambah </button>
        {{-- dibawah --}}
      </ul>
      <div class="clearfix"></div>

      <div class="x_content">
      </br>
      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Email</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1;  ?>
          @foreach($admin as $data)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>
              <div class="btn-group" role="group" aria-label="...">
                <!-- view button -->
                <button type="button" class="btn btn-sm btn-primary detail_user" data-toggle="modal" data-target=".bs-example-modal-lg" value="{{ $data->id }}"><i class="glyphicon glyphicon-eye-open"></i></button>
                <!-- edit button -->
                <button type="button" class="btn btn-sm btn-primary edit" data-toggle="modal" data-target=".bs-example1-modal-lg" value="{{ $data->id }}"><i class="glyphicon glyphicon-pencil"></i></button>
                <!-- delete button -->
                <a href="{{ url('superadmin/madmin/delete/'.$data->id) }}" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

<!-- Modal Section -->
{{-- CREATE MODAL --}}
<div class="modal fade bs-create-modal-lg createModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title text-center" id="myModalLabel" ><i class="fa fa-check-square-o"></i> Tambah Admin</h4>
      </div>
      <div class="modal-body">
        {{-- modal content --}}
        <div class="x_panel">
          <div class="x_content">
            <!-- error cek email -->
            <div id="errorEmail" class="alert alert-error errorEmail" role="alert"><strong>Error</strong> &bull; Maaf email yang ada masukkan telah digunakan</div>
            <br />

            <form class="form-horizontal form-label-left" method="post" action="{{ url ('superadmin/madmin/saveadmin') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" id="name" class="form-control" placeholder="nama lengkap" required="required" name="name">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">E-Mail</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="email" id="email" class="form-control has-feedback-left email" placeholder="contoh@mail.com" name="email" data-parsley-trigger="change" required />
                  <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="password" id="password" class="form-control" placeholder="password" name="password">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="x_content">
                    <input type="file" id="foto" name="foto" >
                    <br />
                  </div>
                </div>
              </div>

              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                  <button id="btnSubmitModalMadmin" type="submit" class="btn btn-success" enabled >Submit</button>
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

{{-- DETAIL MODAL --}}
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title text-center" id="myModalLabel" ><i class="fa fa-eye"></i> Detail Admin </h4>
      </div>
      <div class="modal-body">
        {{-- modal content --}}
        <div class="x_panel">
          <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left">
              <!-- gambar -->
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <img class="foto" src="" height="100%">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12"> ID Admin </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="id" required="required" readonly>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="nama" required="required" readonly="readonly">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">E-Mail</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="email" id="email_user" class="form-control has-feedback-left" data-parsley-trigger="change" required readonly="readonly"/>
                  <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
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

{{-- EDIT MODAL --}}
<div class="modal fade bs-example1-modal-lg editModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title text-center" id="myModalLabel" ><i class="fa fa-pencil"></i> Edit Data Admin </h4>
      </div>
      <div class="modal-body">
        {{-- modal content --}}
        <div class="x_panel">
          <div class="x_content">
            <!-- error cek email -->
            <div id="errorEmail" class="alert alert-error errorEmail" role="alert"><strong>Error</strong> &bull; Maaf email yang ada masukkan telah digunakan</div>
            <br />
            <form class="form-horizontal form-label-left" method="post"  action="{{url('superadmin/madmin/updateadmin')}}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Id Admin</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="id_edit" name="id_edit" readonly>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" id="nama_edit" name="nama_edit" required="required">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">E-Mail</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="email" id="email_edit" class="form-control has-feedback-left" name="email_edit" data-parsley-trigger="change" readonly  />
                  <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="password" id="password_edit" name="password_edit" class="form-control" placeholder="password">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="file" name="foto" id="foto">
                </div>
              </div>

            </div>

            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                <button type="submit" id="btnSubmitModalMadmin" class="btn btn-success btnSubmitModalMadmin">Submit</button>
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
