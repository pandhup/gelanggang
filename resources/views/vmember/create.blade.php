@extends('layouts.gentelella')

@section('content')

  <div class="x_panel text-center">
    <div class="x_content">
      <br />
      <form class="form-horizontal form-label-left">
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Event</label>
          <div class="col-md-6 col-sm-9 col-xs-12">
            <input type="text" class="form-control" placeholder="nama event" required="required">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Lokasi</label>
          <div class="col-md-6 col-sm-9 col-xs-12">
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
          <div class="col-md-6 col-sm-9 col-xs-12">
            <textarea class="form-control" rows="3" placeholder='Type here'></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Kontak</label>
          <div class="col-md-3 col-sm-9 col-xs-12 form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id="inputSuccess5" placeholder="Phone" required="required">
              <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">File Poster</label>
          <div class="col-md-6 col-sm-9 col-xs-12">
            <div class="x_content">
              <form action="form_upload.html" class="dropzone"></form>
              <br />
            </div>
          </div>
        </div>

        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
            <button type="reset" class="btn btn-primary">Reset</button>
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>

@endsection
