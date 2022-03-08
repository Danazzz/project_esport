<?php
require_once "../../../config/conn.php";
if(!isset($_SESSION['user'])){
  echo "<script>window.location='".base_url('../../../auth/login.php')."';</script>";
} 
$path = "../../../database/img/";?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel ESPORT</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
  <!-- Icon Logo -->
  <link rel="icon" href="../../../dist/img/LogoESIDPS.png">
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
      <a href="../../../homepage.php" class="brand-link">
      <img src="../../../dist/img/LogoESIDPS.png" alt="Esport Logo" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
          <img src="../../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
                  <a href="../../../content/admin/" class="nav-link">
                  <i class="nav-icon fa fa-book"></i>
                  <p class="text">Admin</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="../../../content/organizer/" class="nav-link">
                    <i class="nav-icon fa fa-book"></i>
                    <p class="text">Organizer</p>
                  </a>
                </li>
              <li class="nav-item">
                  <a href="../../../content/user/" class="nav-link">
                  <i class="nav-icon fa fa-book"></i>
                  <p class="text">User</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="../../../content/squad/" class="nav-link">
                  <i class="nav-icon fa fa-book"></i>
                  <p class="text">Squad</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="../../../content/tournament/" class="nav-link">
                  <i class="nav-icon fa fa-book"></i>
                  <p class="text">Tournament</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="../../../content/games/" class="nav-link">
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
                  <a href="../../../auth/register.php" class="nav-link">
                  <i class="nav-icon fa fa-plus"></i>
                  <p>Register</p>
                  </a>
              </li>
          <li class="nav-item">
              <a href="../../../auth/logout.php" class="nav-link">
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