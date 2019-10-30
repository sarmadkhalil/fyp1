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
  <!-- Font Awesome Icons -->
  
  <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../img/rocket.png" alt="Sales Order management logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Sales Order</br>management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <a href="{{ url('profile') }}" class="nav-link ">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../img/customer-support.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          {{ Auth::user()->name }}
        </div>
      </div>
      </a>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

              <li class="nav-item">
              <a href="{{ url('home') }}" class="nav-link ">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                    Dashboard
                </p>
                </a>
              </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Management
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php
                      $user = Auth::user()->user_type;
                      if($user == 'admin'){?><li class="nav-item">
                <a href="{{ url('users') }}" class="nav-link ">
                  <i class="fas fa-users"></i>
                  <p>Employees</p>
                </a>
                      </li><?php }?>
              <li class="nav-item">
                <a href="{{ url('customers') }}" class="nav-link ">
                  <i class="fas fa-users"></i>
                  <p>Customers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('suppliers') }}" class="nav-link ">
                  <i class="fas fa-users"></i>
                  <p>Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('products') }}" class="nav-link ">
                  <i class="fas fa-users"></i>
                  <p>Products</p>
                </a>
              </li>
              </ul>
              <li class="nav-item">
                <a href="{{ url('inquiries') }}" class="nav-link ">
                  <i class="fas fa-users"></i>
                  <p>Inquiries</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('salesquotes') }}" class="nav-link ">
                  <i class="fas fa-users"></i>
                  <p>Salesquote</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('audit') }}" class="nav-link ">
                  <i class="fas fa-users"></i>
                  <p>Audit</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                 <i class="nav-icon fas fa-power-off"></i>
                    logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
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
        @yield('content')
      </div>
    </div>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="/js/app.js"></script>

</body>
</html>
