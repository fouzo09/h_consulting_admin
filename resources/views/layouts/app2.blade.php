<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
   <!-- DataTables -->
   <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
   <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
   <!-- JQVMap -->
   <link rel="stylesheet" href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
   <!-- overlayScrollbars -->
   <link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
   <!-- summernote -->
   <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Fontawsome  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <style>

        .action{
            margin-right: 5px;
            margin-left: 5px;
            font-weight: 100;
        }

        .my-fa-remove{
            color: red;
        }

        .my-fa-edit{
            color: black;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
{{--      <li class="nav-item d-none d-sm-inline-block">--}}
{{--        <a href="{{asset('assets/index3.html')}}" class="nav-link">Home</a>--}}
{{--      </li>--}}
{{--      <li class="nav-item d-none d-sm-inline-block">--}}
{{--        <a href="#" class="nav-link">Contact</a>--}}
{{--      </li>--}}
    </ul>

    <!-- SEARCH FORM -->
{{--    <form class="form-inline ml-3">--}}
{{--      <div class="input-group input-group-sm">--}}
{{--        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">--}}
{{--        <div class="input-group-append">--}}
{{--          <button class="btn btn-navbar" type="submit">--}}
{{--            <i class="fas fa-search"></i>--}}
{{--          </button>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </form>--}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
{{--      <!-- Messages Dropdown Menu -->--}}
{{--      <li class="nav-item dropdown">--}}
{{--        <a class="nav-link" data-toggle="dropdown" href="#">--}}
{{--          <i class="far fa-comments"></i>--}}
{{--          <span class="badge badge-danger navbar-badge">3</span>--}}
{{--        </a>--}}
{{--        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
{{--          <a href="#" class="dropdown-item">--}}
{{--            <!-- Message Start -->--}}
{{--            <div class="media">--}}
{{--              <img src="{{asset('assets/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">--}}
{{--              <div class="media-body">--}}
{{--                <h3 class="dropdown-item-title">--}}
{{--                  Brad Diesel--}}
{{--                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>--}}
{{--                </h3>--}}
{{--                <p class="text-sm">Call me whenever you can...</p>--}}
{{--                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <!-- Message End -->--}}
{{--          </a>--}}
{{--          <div class="dropdown-divider"></div>--}}
{{--          <a href="#" class="dropdown-item">--}}
{{--            <!-- Message Start -->--}}
{{--            <div class="media">--}}
{{--              <img src="{{asset('assets/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
{{--              <div class="media-body">--}}
{{--                <h3 class="dropdown-item-title">--}}
{{--                  John Pierce--}}
{{--                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>--}}
{{--                </h3>--}}
{{--                <p class="text-sm">I got your message bro</p>--}}
{{--                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <!-- Message End -->--}}
{{--          </a>--}}
{{--          <div class="dropdown-divider"></div>--}}
{{--          <a href="#" class="dropdown-item">--}}
{{--            <!-- Message Start -->--}}
{{--            <div class="media">--}}
{{--              <img src="{{asset('assets/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
{{--              <div class="media-body">--}}
{{--                <h3 class="dropdown-item-title">--}}
{{--                  Nora Silvester--}}
{{--                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>--}}
{{--                </h3>--}}
{{--                <p class="text-sm">The subject goes here</p>--}}
{{--                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <!-- Message End -->--}}
{{--          </a>--}}
{{--          <div class="dropdown-divider"></div>--}}
{{--          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>--}}
{{--        </div>--}}
{{--      </li>--}}
{{--      <!-- Notifications Dropdown Menu -->--}}
{{--      <li class="nav-item dropdown">--}}
{{--        <a class="nav-link" data-toggle="dropdown" href="#">--}}
{{--          <i class="far fa-bell"></i>--}}
{{--          <span class="badge badge-warning navbar-badge">15</span>--}}
{{--        </a>--}}
{{--        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
{{--          <span class="dropdown-item dropdown-header">15 Notifications</span>--}}
{{--          <div class="dropdown-divider"></div>--}}
{{--          <a href="#" class="dropdown-item">--}}
{{--            <i class="fas fa-envelope mr-2"></i> 4 new messages--}}
{{--            <span class="float-right text-muted text-sm">3 mins</span>--}}
{{--          </a>--}}
{{--          <div class="dropdown-divider"></div>--}}
{{--          <a href="#" class="dropdown-item">--}}
{{--            <i class="fas fa-users mr-2"></i> 8 friend requests--}}
{{--            <span class="float-right text-muted text-sm">12 hours</span>--}}
{{--          </a>--}}
{{--          <div class="dropdown-divider"></div>--}}
{{--          <a href="#" class="dropdown-item">--}}
{{--            <i class="fas fa-file mr-2"></i> 3 new reports--}}
{{--            <span class="float-right text-muted text-sm">2 days</span>--}}
{{--          </a>--}}
{{--          <div class="dropdown-divider"></div>--}}
{{--          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
{{--        </div>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">--}}
{{--          <i class="fas fa-th-large"></i>--}}
{{--        </a>--}}
{{--      </li>--}}
      <!-- User Authentication -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
             @if (Route::has('login'))

                  @auth
                      <a href="{{ route('logout.user') }}" class="dropdown-item">
                        <i class="fas fa-lock"></i>
                        <span class="text-muted">Logout</span>
                      </a>

                        <a href="{{route('new.password.form')}}" class="dropdown-item">
                            <i class="fas fa-edit"></i>
                           <span class="text-muted">Modifier votre mot de passe</span>
                        </a>
                  @else
                      <a href="{{ route('login') }}" class="dropdown-item">
                        <i class="fas fa-unlock"></i>
                        <span class="text-muted">Login</span>
                      </a>
                  @endauth

            @endif
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link elevation-4">
      <img src="{{asset('images/diyah-logo/logo.png')}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8; height: 55px; width: 55px" >
      <span class="brand-text font-weight-light">ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}"  class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
              @if(\Illuminate\Support\Facades\Auth::user())
                  {{ \Illuminate\Support\Facades\Auth::user()->firstName }}
             @endif

          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Tableau de bord
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('centre.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Centre de vaccination
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('carnet.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-file-medical"></i>
                    <p>
                        Carnet
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('carnet.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-eyedropper"></i>
                    <p>
                        Vaccins
                    </p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-box"></i>
                  <p>
                   Dépôts
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{route('entre.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-arrow-down"></i>
                        <p>Entrer</p>
                      </a>
                    </li>
                  @can('see', App\Role::class)
                    <li class="nav-item">
                      <a href="{{route('sortie.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-arrow-up"></i>
                        <p>Sortie</p>
                      </a>
                    </li>
                  @endcan
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                  <p>
                    Utilisateurs
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{route('users-list')}}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Liste</p>
                      </a>
                    </li>
                  @can('see', App\Role::class)
                    <li class="nav-item">
                      <a href="{{route('role-index')}}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Role</p>
                      </a>
                    </li>
                  @endcan
                </ul>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    {{-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fixed Navbar Layout</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Navbar Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section> --}}
      <hr>
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0 text-dark">
                          @if(isset($title))
                              {{ $title }}
                          @endif
                      </h1>
                  </div><!-- /.col -->

              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
    <!-- Main content -->
      <hr>
    <section class="content">
      {{-- <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                Start creating your amazing application!
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div> --}}

        @yield('content')
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2021 <a href="#">Delt.tech</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- ChartJS -->
<script src="{{asset('assets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('assets/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
        language: {
            processing:     "Traitement en cours...",
            search:         "Rechercher&nbsp;:",
            lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
            info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
            infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
            infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
            infoPostFix:    "",
            loadingRecords: "Chargement en cours...",
            zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
            emptyTable:     "Aucune donnée disponible dans le tableau",
            paginate: {
                first:      "Premier",
                previous:   "Pr&eacute;c&eacute;dent",
                next:       "Suivant",
                last:       "Dernier"
            },
            aria: {
                sortAscending:  ": activer pour trier la colonne par ordre croissant",
                sortDescending: ": activer pour trier la colonne par ordre décroissant"
            }
        }

    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
        language: {
            processing:     "Traitement en cours...",
            search:         "Rechercher&nbsp;:",
            lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
            info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
            infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
            infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
            infoPostFix:    "",
            loadingRecords: "Chargement en cours...",
            zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
            emptyTable:     "Aucune donnée disponible dans le tableau",
            paginate: {
                first:      "Premier",
                previous:   "Pr&eacute;c&eacute;dent",
                next:       "Suivant",
                last:       "Dernier"
            },
            aria: {
                sortAscending:  ": activer pour trier la colonne par ordre croissant",
                sortDescending: ": activer pour trier la colonne par ordre décroissant"
            }
        }

    });
  });
</script>
</body>
</html>
