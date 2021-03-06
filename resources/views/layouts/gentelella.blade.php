<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Important to work AJAX CSRF -->
  <meta name="_token" content="{!! csrf_token() !!}" />

  <title>Portal Gelanggang</title>

  <!-- Bootstrap -->
  <link href="{{asset('/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{asset('/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{asset('/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{asset('/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
  <!-- Datatables -->
  <link href="{{asset('/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>

  <!-- bootstrap-progressbar -->
  <link href="{{asset('/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
  <!-- JQVMap -->
  <link href="{{asset('/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
  <!-- bootstrap-daterangepicker -->
  <link href="{{asset('/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
  <!-- Dropzone.js -->
  <link href="{{asset('/vendors/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="{{asset('/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><i class="fa fa-paw"></i>
              @if (Auth::user()->role == 'superadmin')
              <span><b>Super</b>Admin</span>
              @elseif (Auth::user()->role == 'admin')
              <span><b>Admin</b></span>
              @else
              <span><b>Member</b></span>
              @endif
            </a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="{{asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>{{Auth::user()->name}}</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            @if (Auth::user()->role == 'superadmin')
            <div class="menu_section">
              <h3>Management</h3>
              <ul class="nav side-menu">
                <li><a href="{{url ('superadmin/home')}}"><i class="fa fa-home"></i> home </a></li>
                <li><a href="{{url('superadmin/madmin')}}"><i class="fa fa-user"></i> Admin </a></li>
                <li><a href="{{url('superadmin/mmembe')}}r"><i class="fa fa-laptop"></i> Member </a></li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Setting</h3>
              <ul class="nav side-menu">
                <li><a data-toggle="modal" data-target=".bs-password-modal-lg"><i class="fa fa-pencil"></i> Ubah Sandi </a></li>
              </ul>
            </div>
            @elseif (Auth::user()->role == 'admin')
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="{{url('admin/home')}}"><i class="fa fa-home"></i> Home </a></li>
                <li><a><i class="fa fa-edit"></i> Manajemen Event <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{url('admin/antrian')}}">Antrian</a></li>
                    <li><a href="{{url('admin/revisi')}}">Revisi</a></li>
                    <li><a href="{{url('admin/berlangsung')}}">Berlangsung</a></li>
                    <li><a href="{{url('admin/berakhir')}}">Berakhir</a></li>
                    <li><a href="{{url('admin/tolak')}}">Ditolak</a></li>
                    <li><a href="{{url('admin/batal')}}">Dibatalkan</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Setting</h3>
              <ul class="nav side-menu">
                <li><a data-toggle="modal" data-target=".bs-password-modal-lg"><i class="fa fa-pencil"></i> Ubah Sandi </a></li>
              </ul>
            </div>
            @else
            <div class="menu_section">
              <ul class="nav side-menu">
                <li><a href="home"><i class="fa fa-home"></i> Home </a></li>
              </ul>
              <h3>Post</h3>
              <ul class="nav side-menu">
                <li><a href="create"><i class="fa fa-check-square-o"></i> Create Event </a></li>
                <li><a href="event"><i class="fa fa-bars"></i> List Event </a></li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Setting</h3>
              <ul class="nav side-menu">
                <li><a data-toggle="modal" data-target=".bs-password-modal-lg"><i class="fa fa-pencil"></i> Ubah Sandi </a></li>
              </ul>
            </div>
            @endif
            @yield('navbar')

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->

          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="{{asset('images/img.jpg')}}" alt="">{{ Auth::user()->name }}
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <!-- <li><a href="javascript:;">Settings</a></li> -->
                  <li><a href="logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        @yield('content')
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>

      </footer>
      <!-- /footer content -->
    </div>
  </div>



  <!-- jQuery -->
  <script src="{{asset('/vendors/jquery/dist/jquery.min.js')}}"></script>

  <!-- Bootstrap -->
  <script src="{{asset('/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('/vendors/fastclick/lib/fastclick.js')}}"></script>
  <!-- NProgress -->
  <script src="{{asset('/vendors/nprogress/nprogress.js')}}"></script>
  <!-- Chart.js -->
  <script src="{{asset('/vendors/Chart.js/dist/Chart.min.js')}}"></script>
  <!-- gauge.js -->
  <script src="{{asset('/vendors/gauge.js/dist/gauge.min.js')}}"></script>
  <!-- bootstrap-progressbar -->
  <script src="{{asset('/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
  <!-- iCheck -->
  <script src="{{asset('/vendors/iCheck/icheck.min.js')}}"></script>
  <!-- Skycons -->
  <script src="{{asset('/vendors/skycons/skycons.js')}}"></script>
  <!-- Flot -->
  <script src="{{asset('/vendors/Flot/jquery.flot.js')}}"></script>
  <script src="{{asset('/vendors/Flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('/vendors/Flot/jquery.flot.time.js')}}"></script>
  <script src="{{asset('/vendors/Flot/jquery.flot.stack.js')}}"></script>
  <script src="{{asset('/vendors/Flot/jquery.flot.resize.js')}}"></script>
  <!-- Flot plugins -->
  <script src="{{asset('/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
  <script src="{{asset('/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
  <script src="{{asset('/vendors/flot.curvedlines/curvedLines.js')}}"></script>
  <!-- DateJS -->
  <script src="{{asset('/vendors/DateJS/build/date.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{asset('/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
  <script src="{{asset('/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
  <script src="{{asset('/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="{{asset('/vendors/moment/min/moment.min.js')}}"></script>
  <script src="{{asset('/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <!-- Datatables -->
  <script src="{{asset('/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
  <script src="{{asset('/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
  <script src="{{asset('/vendors/jszip/dist/jszip.min.js')}}"></script>
  <script src="{{asset('/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
  <script src="{{asset('/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

  <!-- Dropzone.js -->
  <script src="{{asset('/vendors/dropzone/dist/min/dropzone.min.js')}}"></script>

  <!-- Script Ajax -->
  <script src="{{asset('js/eventscript.js')}}"></script>
  <script src="{{asset('js/admin.js')}}"></script>
  <script src="{{asset('js/superadmin.js')}}"></script>

  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>

  {{-- UBAH SANDI MODAL --}}
  <div class="modal fade bs-password-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title text-center" id="myModalLabel" ><i class="fa fa-pencil"></i> Ubah Kata Sandi </h4>
        </div>
        <div class="modal-body">
          {{-- modal content --}}
          <div class="x_panel">
            <div class="x_content">
              <br />
              <form class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Kata Sandi Lama</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="password" class="form-control" placeholder="password">
                  </div>
                </div>

                <div class="item form-group">
                  <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Kata Sandi Baru</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                  </div>
                </div>
                <div class="item form-group">
                  <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Ulangi Kata Sandi</label>
                  <div class="col-md-9 col-sm-9 col-xs-12ss">
                    <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
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

</body>
</html>
