<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/gijgo.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slicknav.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_top_wrap d-flex justify-content-between align-items-center">
                                <div class="text_wrap">
                                    <p><span>+880166 253 232</span> <span>info@domain.com</span></p>
                                </div>
                                <div class="text_wrap">
                                    <p><a href="#"> <i class="ti-user"></i>  Login</a> <a href="<?php echo base_url(); ?>Welcome/register">Register</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_wrap d-flex justify-content-between align-items-center">
                                <div class="header_left">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li ><a class="<?php echo $this->uri->segment(2)=="index"?"active":" "; ?>"   href="<?php echo base_url(); ?>Welcome/index">home</a></li>
                                                <li><a 	class="<?php echo $this->uri->segment(2)=="Courses"?"active":" "; ?>" href="<?php echo base_url(); ?>Welcome/Courses">Courses</a></li>
                                                <li><a 	class="<?php echo $this->uri->segment(2)=="blog"?"active":" "; ?>" 	  href="<?php echo base_url(); ?>Welcome/blog">blog <i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="<?php echo base_url(); ?>Welcome/blog">blog</a></li>
                                                        <li><a href="<?php echo base_url(); ?>Welcome/single_blog">single-blog</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="<?php echo $this->uri->segment(2)=="pages"?"active":" "; ?>" href="<?php echo base_url(); ?>Welcome/pages">pages <i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="Event.html">Event</a></li>
                                                        <li><a href="event_details.html">Event Details</a></li>
                                                        <li><a href="Admissions.html">Admissions</a></li>
                                                        <li><a href="elements.html">elements</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="<?php echo $this->uri->segment(2)=="Contact"?"active":" "; ?>" href="<?php echo base_url(); ?>Welcome/Contact1">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="Appointment">
                                        <div class="book_btn d-none d-lg-block">
                                            <a class="<?php echo $this->uri->segment(2)=="ApplyNOw"?"active":" "; ?>" href="<?php echo base_url(); ?>Welcome/apply">Apply NOw</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>