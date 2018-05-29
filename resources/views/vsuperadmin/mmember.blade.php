@extends('layouts.gentelella')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Data Member</h2>
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
              <th>Nama UKM</th>
              <th>Email</th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            <?php $no=1;  ?>
            @foreach($user as $data)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $data->nama_ukm }}</td>
              <td>{{ $data->email }}</td>
              <td>
                <div class="btn-group" role="group" aria-label="...">
                  <!-- veiw button -->
                  <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="glyphicon glyphicon-eye-open"></i></button>
                  <!-- edit button -->
                  <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bs-example1-modal-lg"><i class="glyphicon glyphicon-pencil"></i></button>
                  <!-- delete button -->
                  <a href="#" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
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

{{-- CREATE MODAL --}}
<div class="modal fade bs-create-modal-lg" id="createModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title text-center" id="myModalLabel" ><i class="fa fa-check-square-o"></i> Tambah Member</h4>
      </div>
      <div class="modal-body">
        {{-- modal content --}}
        <div class="x_panel">
          <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama UKM</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="form-control">
                    <option>Pilih UKM</option>
                    @foreach ($ukm as $data)
                    <option>{{ $data->nama_ukm }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">E-Mail</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="email" id="email" class="form-control has-feedback-left" placeholder="contoh@mail.com" name="email" data-parsley-trigger="change" required />
                  <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="password" class="form-control" placeholder="password">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="x_content">
                    <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
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

<!-- Modal Section -->
{{-- DETAIL MODAL --}}
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title text-center" id="myModalLabel" ><i class="fa fa-eye"></i> Detail Member </h4>
      </div>
      <div class="modal-body">
        {{-- modal content --}}
        <div class="x_panel">
          <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left">
              <div class="form-group">
                <!-- foto -->
                <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="img-preview preview-lg">
                    <img src="{{asset('images/img.jpg')}}">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Member</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" required="required" readonly>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama UKM</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" required="required" readonly="readonly">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">ID UKM </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" required="required" readonly>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">E-Mail</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="email" id="email" class="form-control has-feedback-left" placeholder="contoh@mail.com" name="email" data-parsley-trigger="change" required readonly="readonly"/>
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
<div class="modal fade bs-example1-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title text-center" id="myModalLabel" ><i class="fa fa-pencil"></i> Edit Data Member </h4>
      </div>
      <div class="modal-body">
        {{-- modal content --}}
        <div class="x_panel">
          <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama UKM</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <select class="form-control">
                      <option>Choose option</option>
                      <option>Option one</option>
                      <option>Option two</option>
                      <option>Option three</option>
                      <option>Option four</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">E-Mail</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="email" id="email" class="form-control has-feedback-left" placeholder="contoh@mail.com" name="email" data-parsley-trigger="change" required />
                  <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="password" class="form-control" placeholder="password">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="x_content">
                    <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
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

@endsection
