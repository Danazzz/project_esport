<?php
require_once "config/conn.php";
if (!isset($_SESSION['user'])) {
  echo "<script>window.location='" . base_url('auth/loginn.php') . "';</script>";
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel ESPORT</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- Icon Logo -->
  <link rel="icon" href="dist/img/LogoESIDPS.png">
  <!-- All icon in homepage -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/LogoESIDPS.svg" alt="AdminLTELogo" height="500" width="500">
    </div>

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
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="homepage.php" class="brand-link">
        <img src="dist/img/LogoESIDPS.png" alt="Esport Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin</a>
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
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="content/admin/" class="nav-link">
                    <i class="nav-icon fa fa-book"></i>
                    <p class="text">Admin</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="content/organizer/" class="nav-link">
                    <i class="nav-icon fa fa-book"></i>
                    <p class="text">Organizer</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="content/user/" class="nav-link">
                    <i class="nav-icon fa fa-book"></i>
                    <p class="text">User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="content/squad/" class="nav-link">
                    <i class="nav-icon fa fa-book"></i>
                    <p class="text">Squad</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="content/tournament/" class="nav-link">
                    <i class="nav-icon fa fa-book"></i>
                    <p class="text">Tournament</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="content/games/" class="nav-link">
                    <i class="nav-icon fa fa-book"></i>
                    <p class="text">Games</p>
                  </a>
                </li>
              </ul>
            </li>

            <div style="height: 0; margin: 0.5rem 0; overflow: hidden; border-top: 1px solid #8c8e91;"></div>
            <li class="nav-item">
              <a href="https://adminlte.io/docs/3.1/" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>Documentation</p>
              </a>
            </li>
            <li class="nav-item">
                  <a href="auth/register.php" class="nav-link">
                    <i class="nav-icon fa fa-plus"></i>
                    <p>Register</p>
                  </a>
                </li>
            <li class="nav-item">
              <a href="auth/logout.php" class="nav-link">
                <i class="nav-icon fa fa-power-off"></i>
                <p>LogOut</p>
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
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Homepage</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fa-solid fa-user"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">User Registrated</span>
                  <span class="info-box-number">
                    <?php
                      $dash_query = "SELECT * from user";
                      $dash_query_run = mysqli_query($con, $dash_query);
                      
                      if($user_total = mysqli_num_rows($dash_query_run))
                      {
                        echo '<h4 class="mb-0"> '.$user_total.' </h4>';
                      }
                      else
                      {
                        echo '<h4 class="mb-0"> No Data </h4>';
                      }
                    ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-trophy"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Tournament Created</span>
                <span class="info-box-number">
                  <?php
                    $dash_query = "SELECT * from tournament";
                    $dash_query_run = mysqli_query($con, $dash_query);
                    
                    if($user_total = mysqli_num_rows($dash_query_run))
                    {
                      echo '<h4 class="mb-0"> '.$user_total.' </h4>';
                    }
                    else
                    {
                      echo '<h4 class="mb-0"> No Data </h4>';
                    }
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Squad Created</span>
                <span class="info-box-number">
                  <?php
                    $dash_query = "SELECT * from squad";
                    $dash_query_run = mysqli_query($con, $dash_query);
                    
                    if($user_total = mysqli_num_rows($dash_query_run))
                    {
                      echo '<h4 class="mb-0"> '.$user_total.' </h4>';
                    }
                    else
                    {
                      echo '<h4 class="mb-0"> No Data </h4>';
                    }
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.container fluid -->
        
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->

              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">User Registration History</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 1%">No.</th>
                            <th style="width: 40%">User Registration</th>
                            <th>Date Register</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $limit = 5;
                            $page = @$_GET['page'];
                            if(empty($page)){
                              $position = 0;
                              $page = 1;
                            }
                            else{
                              $position = ($page - 1) * $limit;
                            }
                            $no = 1;
                            if($_SERVER['REQUEST_METHOD'] == "POST"){
                              $search = trim(mysqli_real_escape_string($con, $_POST['search']));
                            if($search != ''){
                              $sql = "SELECT * FROM user
                                WHERE name = '%$search%'
                                ORDER BY created_at DESC, updated_at DESC";
                              $query = $sql;
                              $query_sum = $sql;
                            }else{
                              $query = "SELECT * FROM user
                                ORDER BY created_at DESC, updated_at DESC
                                LIMIT $position, $limit";
                              $query_sum = "SELECT * FROM user";
                              $no = $position + 1;
                            }
                            }else{
                              $query = "SELECT * FROM user
                                ORDER BY created_at DESC, updated_at DESC
                                LIMIT $position, $limit";
                              $query_sum = "SELECT * FROM user";
                              $no = $position + 1;
                            }
                                                  
                              $sql = mysqli_query($con, $query) or die(mysqli_error($con));
                                if(mysqli_num_rows($sql) > 0){
                                  while($data = mysqli_fetch_array($sql)){ ?>
                                    <tr>
                                      <td><?= $no++; ?></td>
                                      <td><?= $data['full_name']; ?></td>
                                      <td><?= indo_date($data['created_at']); ?> </br>
                                      <small>
                                        <?= $data['updated_at']; ?>
                                      </small>
                                      </td>
                                      <td>
                                        <a href="content/user/crud/detail.php?id=<?= $data['id_user'] ?>" class="btn btn-primary btn-sm" >
                                          <i class="fas fa-folder"></i>
                                            View
                                        </a>
                                      </td>
                                    </tr>
                                    <?php
                                    }
                                    }else{
                                      echo "<tr><td colspan=\"7\" align=\"center\">Data tidak ditemukan</td></tr>";
                                    }
                                    ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
          </section>
          <!-- /.Left col -->

          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-6 connectedSortable">
            
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Tournament History Registration</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 1%">No.</th>
                            <th style="width: 40%">Tournament Name</th>
                            <th>Date Created</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $limit = 5;
                            $page = @$_GET['page'];
                            if(empty($page)){
                              $position = 0;
                              $page = 1;
                            }
                            else{
                              $position = ($page - 1) * $limit;
                            }
                              $no = 1;
                            if($_SERVER['REQUEST_METHOD'] == "POST"){
                              $search = trim(mysqli_real_escape_string($con, $_POST['search']));
                            if($search != ''){
                              $sql = "SELECT * FROM tournament
                                WHERE name = '%$search%'
                                ORDER BY created_at DESC, updated_at DESC";
                              $query = $sql;
                              $query_sum = $sql;
                            }else{
                              $query = "SELECT * FROM tournament
                                ORDER BY created_at DESC, updated_at DESC
                                LIMIT $position, $limit";
                              $query_sum = "SELECT * FROM tournament";
                              $no = $position + 1;
                            }
                            }else{
                              $query = "SELECT * FROM tournament
                                ORDER BY created_at DESC, updated_at DESC
                                LIMIT $position, $limit";
                              $query_sum = "SELECT * FROM tournament";
                              $no = $position + 1;
                            }
                                                  
                            $sql = mysqli_query($con, $query) or die(mysqli_error($con));
                              if(mysqli_num_rows($sql) > 0){
                                while($data = mysqli_fetch_array($sql)){ ?>
                                  <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $data['name']; ?></td>
                                    <td><?= indo_date($data['created_at']); ?> </br>
                                    <small>
                                      <?= $data['updated_at']; ?>
                                    </small>
                                    </td>
                                    <td>
                                      <a href="content/tournament/crud/detail.php?id=<?= $data['id_tournament'] ?>" class="btn btn-primary btn-sm" >
                                        <i class="fas fa-folder"></i>
                                        View
                                      </a>
                                    </td>
                                  </tr>
                                  <?php
                                  }
                                  }else{
                                    echo "<tr><td colspan=\"7\" align=\"center\">Data tidak ditemukan</td></tr>";
                                  }
                                  ?>
                          </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0-rc
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="dist/js/demo.js"></script> -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
</body>
</html>