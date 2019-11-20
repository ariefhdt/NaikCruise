<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
      <!-- meta charec set -->
        <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Page Title -->
        <title>Naik Cruise</title>    
    <!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
    <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Google Font -->
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS
    ================================================== -->
    <!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="<?php echo base_url('css3/font-awesome.min.css')?>">
    <!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="<?php echo base_url('css3/bootstrap.min.css')?>">
    <!-- jquery.fancybox  -->
        <link rel="stylesheet" href="<?php echo base_url('css3/jquery.fancybox.css')?>">
    <!-- animate -->
        <link rel="stylesheet" href="<?php echo base_url('css3/animate.css')?>">
    <!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url('css3/main.css')?>">
    <!-- media-queries -->
        <link rel="stylesheet" href="<?php echo base_url('css3/media-queries.css')?>">

        <link rel="stylesheet" href="<?php echo base_url('css/styles.css')?>">


        <!-- Bootstrap css -->

    <!-- Modernizer Script for old Browsers -->
        <script src="<?php echo base_url('js3/modernizr-2.6.2.min.js')?>"></script>

    </head>
  
    <body id="body">
  
    <!-- preloader -->
    <div id="preloader">
      <img src="img3/preloader.gif" alt="Preloader">
    </div>
    <!-- end preloader -->
    
    <!-- Start navbar  -->
    <div class="my-navbar">
        <ul class="my-ul">
          <li class="my-li"><a class="<?php echo $this->uri->segment(1)== ''? 'active': ''?>" href="<?php echo site_url('')?>">Home</a></li>
          <li class="my-li"><a href="#">Plans</a></li>
          <li class="my-li"><a class="<?php echo $this->uri->segment(1)== 'products'? 'active': ''?>" href="<?php echo site_url('products')?>">Package</a></li>
          <li class="my-li"><a href="#">How to?</a></li>

          
          <li class="my-li"><a href="#">Contact</a></li>
          <li class="my-li"><a href="#">About</a></li>
          <li class="my-li"><a href="#">FAQ</a></li>
        </ul>
    </div>
    <!-- End Navbar -->
