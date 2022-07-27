<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.80.0">
  <title>Krish villa php</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/chosen.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/jquery-ui.css">
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="stylesheet" href="assets/css/slider.css">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="dashboard.css" rel="stylesheet">  
  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
  </style>  
</head>
<body>
  <header class="header-area gray-bg clearfix">
  <div class="header-bottom">
  <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="logo">
                            <a href="index.php">
                                <img alt="" src="assets/img/logo/logo.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-6">
                        <div class="header-bottom-right">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="shop.php">Shop</a></li>
                                        <li><a href="my-account.php">Account</a></li>
                                        <li><a href="gallery.php">Gallery</a></li>
                                        <li><a href="about-us.php">About</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-currency">
                                <span class="digit">LKR</span>
                            </div>
                            <div class="header-cart">
                                <a href="#">
                                    <div class="cart-icon">
                                        <i class="ti-shopping-cart"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-area">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="shop.php">Shop</a></li>
                                <li><a href="my-account.php">Account</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="about-us.php">About</a></li>
                                <li><a href="contact.php">Contact</a></li>                                    
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
            
  </header>
  <!-- <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#">Sign out</a>
      </li>
    </ul>
  </nav> -->
  <div class="container-fluid">
  <div class="row">
    <!-- <div class="col-md-2">
    </div> -->
    <nav id="sidebarMenu" class="">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Farmer Module
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.php">
              <span data-feather="layers"></span>
              Admin module 
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Waste management
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Delivery Personal
            </a>
          </li>
        </ul>
      </div>
    </nav>
  <div class="col-md-10">
</div>  
  <?php
  include('table.php')
  ?>
<?php
  include('dashending.php')

?>           