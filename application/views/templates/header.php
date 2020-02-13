<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Pro-Clickers </title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <!-- Icon -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/line-icons.css">
  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slicknav.css">

  <!-- Nivo Lightbox -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/nivo-lightbox.css">
  <!-- Animate -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/animate.css">
  <!-- Owl carousel -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
  <!-- Main Style -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
  <!-- Responsive Style -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">
  <!-- alertify css -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
  <!-- easy autocomplete CSS file  -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/easy-autocomplete.css">
  <!-- easy autocomplete CSS file  -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/easy-autocomplete.themes.css">
  <!-- Light gallery CSS file  -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/lightgallery.css"/>

  <link rel="icon" 
      type="image/png" 
      href="<?php echo base_url(); ?>assets/img/favicon.ico">
</head>

<body>

  <!-- Header Area wrapper Starts -->
  <header id="header-wrap">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="lni-menu"></span>
            <span class="lni-menu"></span>
            <span class="lni-menu"></span>
          </button>
          <a href="<?php echo base_url(); ?>" class="navbar-brand"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item  <?php if ($this->uri->segment(1) == "") {
                                    echo "active";
                                  } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>">
                Home
              </a>

            </li>
            <li class="nav-item <?php if ($this->uri->segment(1) == "aboutus") {
                                  echo "active";
                                } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>aboutus">
                About us
              </a>
            </li>
 
            <li class="nav-item <?php if ($this->uri->segment(1) == "contact") {
                                  echo "active";
                                } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>contact">
                Contact Us
              </a>
            </li>



          </ul>
          <ul class="sign-in">
            <li class="nav-item dropdown">

              <?php
              if (isset($this->session->userdata['logged_in'])) {
                $username = ($this->session->userdata['logged_in']['name']);
                $email = ($this->session->userdata['logged_in']['email']);

              ?>
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="lni-user"></i>Hi , <?php echo $username; ?>!</a>

                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?php echo base_url(); ?>dashboard"><i class="lni-home"></i> Dashboard</a>



                  <a class="dropdown-item" href="<?php echo base_url(); ?>main/logout"><i class="lni-close"></i>Logout</a>
                </div>
              <?php } else {

              ?>

                <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>login"><i class="lni-user"></i>Log in</a>
                <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>register"><i class="lni-user"></i>Sign up</a>
              <?php
              } ?>


            </li>
          </ul>
          <a class="tg-btn" href="post-ads.html">
            <i class="lni-pencil-alt"></i> Post Requidrement
          </a>
        </div>
      </div>

      <!-- Mobile Menu Start -->
      <ul class="mobile-menu">
        <li>
          <a class="active" href="#">
            Home
          </a>
          <ul class="dropdown">
            <li><a class="active" href="index.html">Home 1</a></li>
            <li><a href="index-2.html">Home 2</a></li>
            <li><a href="index-3.html">Home 2</a></li>
          </ul>
        </li>
        <li>
          <a href="category.html">Categories</a>
        </li>
        <li>
          <a href="#">
            Listings
          </a>
          <ul class="dropdown">
            <li><a href="adlistinggrid.html">Ad Grid</a></li>
            <li><a href="adlistinglist.html">Ad Listing</a></li>
            <li><a href="ads-details.html">Listing Detail</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Pages</a>
          <ul class="dropdown">
            <li><a href="about.html">About Us</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="ads-details.html">Ads Details</a></li>
            <li><a href="post-ads.html">Ads Post</a></li>
            <li><a href="pricing.html">Packages</a></li>
            <li><a href="testimonial.html">Testimonial</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="404.html">404</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Blog</a>
          <ul class="dropdown">
            <li><a href="blog.html">Blog - Right Sidebar</a></li>
            <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
            <li><a href="blog-grid-full-width.html"> Blog full width </a></li>
            <li><a href="single-post.html">Blog Details</a></li>
          </ul>
        </li>
        <li>
          <a href="contact.html">Contact Us</a>
        </li>
        <li>
          <a>My Account</a>
          <ul class="dropdown">
            <li><a href="account-profile-setting.html"><i class="lni-home"></i> Account Home</a></li>
            <li><a href="account-myads.html"><i class="lni-wallet"></i> My Ads</a></li>
            <li><a href="account-favourite-ads.html"><i class="lni-heart"></i> Favourite ads</a></li>
            <li><a href="account-archived-ads.html"><i class="lni-folder"></i> Archived</a></li>
            <li><a href="login.html"><i class="lni-lock"></i> Log In</a></li>
            <li><a href="signup.html"><i class="lni-user"></i> Signup</a></li>
            <li><a href="forgot-password.html"><i class="lni-reload"></i> Forgot Password</a></li>
            <li><a href="account-close.html"><i class="lni-close"></i>Account close</a></li>
          </ul>
        </li>
      </ul>
      <!-- Mobile Menu End -->

    </nav>
    <!-- Navbar End -->