<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HCONSULTING</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">

  <style>
      .icon-remove{
        color: red;
        font-size: 10px;
        margin: 0px 5px;
      }

      .icon-edit{
        color: silver;
        font-size: 10px;
        margin: 0px 5px;
      }

  </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-blue-primary elevation-4" style="background-color:#3672f5 ">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="color:whitesmoke">HCONSULTING</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="color:white">{{ Auth::User()->firstName.' '.Auth::User()->lastName }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{ Route('dashboard') }}" class="nav-link" style="color:white">
              Tableau de bord
            </a>
          </li>
          <div class="sb-sidenav-menu-heading" style="color:black">
            Preliminaires
          </div>
          <li class="nav-item">
            <a href="{{ Route('listeTypeContrat') }}" class="nav-link" style="color:white">
              Type de Contrat
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ Route('listeDomaine') }}" class="nav-link" style="color:white">
              Domaines
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ Route('listeSecteur') }}" class="nav-link" style="color:white">
              Secteurs
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/list-offres-emplois') }}" class="nav-link" style="color:white">
              Offres d'emplois
            </a>
          </li>
          <div class="sb-sidenav-menu-heading" style="color:black">
            Autres choses
          </div>
          <li class="nav-item">
            <a href="{{ url('admin/list-actualites') }}" class="nav-link" style="color:white">
              Actualites
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/list-services') }}" class="nav-link" style="color:white">
              Carrières
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/list-formations') }}" class="nav-link" style="color:white">
              Formations
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/list-entreprises') }}" class="nav-link" style="color:white">
              Entreprises
            </a>
          </li>
          <div class="sb-sidenav-menu-heading" style="color:black">
            Paramétrage de l'application
          </div>
          <li class="nav-item">
            <a href="{{ url('admin/config') }}" class="nav-link" style="color:white">
              Configurations
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/list-users') }}" class="nav-link" style="color:white">
              Utilisateurs
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/logout-user') }}" class="nav-link" style="color:silver">
              Deconnexion
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    @include('alert.flash-message')

    @yield('content')

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2021-2022 <a href="https://hconsulting.com/">HConsulting partie Admin</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('asset/dist/jsplugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('asset/dist/jsdist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('asset/dist/jsdist/js/demo.js') }}"></script>

    <!-- Multiselec -->
    <script src="https://cdn.jsdelivr.net/npm/@dashboardcode/bsmultiselect@0.6.8/dist/js/BsMultiSelect.js"></script>
    <script>
        $(function(){
            $("#secteurs").bsMultiSelect();
            $("#domaines").bsMultiSelect();
            $("#villes").bsMultiSelect();
        });
    </script>
</body>
</html>
