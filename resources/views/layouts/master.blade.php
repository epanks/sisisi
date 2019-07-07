<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="./img/logo.png" alt="sisisi Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">sisisi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./img/profile.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
                {{ Auth::user()->name }}
            </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
                <router-link to="/dashboard" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt blue"></i>
                    <p>
                    Dashboard
                    </p>
                </router-link>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-building green"></i>
                  <p>
                    Balai
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <router-link to="/satker" class="nav-link">
                            <i class="fas fa-users nav-icon teal"></i>
                            <p>Satker</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/balai" class="nav-link">
                            <i class="fas fa-building nav-icon purple"></i>
                            <p>Balai</p>
                        </router-link>
                    </li>

                </ul>
              </li>
            <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-tasks orange"></i>
                      <p>
                        e-Programming
                        <i class="right fa fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <router-link to="/stock" class="nav-link">
                          <i class="fas fa-building nav-icon orange"></i>
                          <p>Stock</p>
                        </router-link>
                      </li>

                      <li class="nav-item">
                        <router-link to="/baseline" class="nav-link">
                          <i class="nav-icon fas fa-list-alt purple"></i>
                          <p>Baseline</p>
                        </a>
                        </router-link>
                      </li>
                    </ul>
                  </li>
            <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-chart-bar green"></i>
                      <p>
                        Progres
                        <i class="right fa fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <router-link to="/balai_progres" class="nav-link">
                          <i class="fas fa-building nav-icon yellow"></i>
                          <p>Balai</p>
                        </router-link>
                      </li>

                      <li class="nav-item">
                        <router-link to="/paket" class="nav-link">
                          <i class="nav-icon fas fa-list-alt red"></i>
                          <p>Paket</p>
                        </a>
                        </router-link>
                      </li>
                      <li class="nav-item">
                        <router-link to="/paket_emon" class="nav-link">
                          <i class="nav-icon fas fa-list-alt blue"></i>
                          <p>Paket Emonitoring</p>
                        </a>
                        </router-link>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-database orange"></i>
                      <p>
                        Database
                        <i class="right fa fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <router-link to="/balai" class="nav-link">
                          <i class="fas fa-building nav-icon yellow"></i>
                          <p>Balai</p>
                        </router-link>
                      </li>
                      <li class="nav-item">
                        <router-link to="/at_db" class="nav-link">
                          <i class="nav-icon fas fa-circle-notch red"></i>
                          <p>Air Tanah</p>
                        </router-link>
                      </li>
                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                          <i class="fa fa-building nav-tint blue"></i>
                          <p>Air Permukaan
                          <i class="right fa fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <router-link to="/sungai_db" class="nav-link">
                          <i class="fas fa-building nav-icon blue"></i>
                          <p>Sungai</p>
                        </router-link>
                      </li>
                      <li class="nav-item">
                        <router-link to="/wdse_db" class="nav-link">
                          <i class="fas fa-water nav-icon orange"></i>
                          <p>Waduk</p>
                        </router-link>
                      </li>
                      <li class="nav-item">
                        <router-link to="/ma_db" class="nav-link">
                          <i class="fas fa-circle nav-icon green"></i>
                          <p>Mata Air</p>
                        </router-link>
                      </li>
                      <li class="nav-item">
                        <router-link to="/pah_db" class="nav-link">
                          <i class="fas fa-home nav-icon red"></i>
                          <p>PAH</p>
                        </router-link>
                      </li>
                    </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-globe-asia cyan"></i>
                      <p>
                        Wilayah
                        <i class="right fa fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <router-link to="/provinsi" class="nav-link">
                          <i class="fas fa-map nav-icon yellow"></i>
                          <p>Provinsi</p>
                        </router-link>
                      </li>
                      <li class="nav-item">
                            <router-link to="/kabupaten" class="nav-link">
                              <i class="fas fa-map-marked nav-icon purple"></i>
                              <p>Kabupaten</p>
                            </router-link>
                          </li>
                          <li class="nav-item">
                                <router-link to="/kecamatan" class="nav-link">
                                  <i class="fas fa-map-marker nav-icon blue"></i>
                                  <p>Kecamatan</p>
                                </router-link>
                              </li>
                              <li class="nav-item">
                                    <router-link to="/desa" class="nav-link">
                                      <i class="fas fa-map-marker-alt nav-icon green"></i>
                                      <p>Desa</p>
                                    </router-link>
                                  </li>
                      <li class="nav-item">
                        <router-link to="/balai" class="nav-link">
                          <i class="nav-icon fas fa-building blue"></i>
                          <p>Balai</p>
                        </a>
                        </router-link>
                      </li>
                    </ul>
                  </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog green"></i>
              <p>
                Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <router-link to="/users" class="nav-link">
                        <i class="fas fa-users nav-icon"></i>
                        <p>Users</p>
                    </router-link>
                </li>

            </ul>
          </li>
          <li class="nav-item">
                <router-link to="/developer" class="nav-link">
                    <i class="nav-icon fas fa-cogs"></i>
                    <p>
                        Developer
                    </p>
                </router-link>
         </li>
          <li class="nav-item">
                <router-link to="/profile" class="nav-link">
                    <i class="nav-icon fas fa-user orange"></i>
                    <p>
                    Profile
                    </p>
                </router-link>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    <i class="nav-icon fa fa-power-off red"></i>
                    <p>
                        {{ __('Logout') }}
                    </p>
                  </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">

            <router-view></router-view>

        </div>
    </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018-2019 <a href="https://adminlte.io">e-Pank</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<script src="/js/app.js"></script>
</body>
</html>
