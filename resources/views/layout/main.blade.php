<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Lavandaia Dharma Bali</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="One page parallax responsive HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Bingo HTML Template v1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('main/images/favicon.png') }}" />

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />
    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="{{ asset('main/plugins/themefisher-font/style.css') }}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('main/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- Lightbox.min css -->
    <link rel="stylesheet" href="{{ asset('main/plugins/lightbox2/css/lightbox.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('main/plugins/animate/animate.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('main/plugins/slick/slick.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('main/css/style.css') }}">

</head>

<body id="body">

    <!--
  Start Preloader
  ==================================== -->
    <div id="preloader">
        <div class='preloader'>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--
  End Preloader
  ==================================== -->

    <!--
Fixed Navigation
==================================== -->
    <header class="navigation fixed-top">
        <div class="container">
            <!-- main nav -->
            <nav class="navbar navbar-expand-lg navbar-light px-0">
                <!-- logo -->
                <a class="navbar-brand logo" href="index.html">
                    <img loading="lazy" class="logo-default" src="{{ asset('main/images/logo.png') }}" alt="logo" />
                    <img loading="lazy" class="logo-white" src="{{ asset('main/images/logo-white.png') }}"
                        alt="logo" />
                </a>
                <!-- /logo -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item {{ request()->is('homes') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('homes.index') }}">Home</a>
                        </li>
                        <li class="nav-item {{ request()->is('abouts') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('abouts.index') }}">About Us</a>
                        </li>
                        <li class="nav-item  {{ request()->is('programs') ? 'active' : '' }} ">
                            <a class="nav-link" href="{{ route('programs.index') }}">Program</a>
                        </li>
                        <li class="nav-item {{ request()->is('activities') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('activities.index') }}">Activity</a>
                        </li>
                        <li class="nav-item {{ request()->is('galleries') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('galleries.index') }}">Gallery</a>
                        </li>
                        <li class="nav-item {{ request()->is('contacts') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('contacts.index') }}">Contact</a>
                        </li>
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown02" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages <i class="tf-ion-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown02">
                                <li><a class="dropdown-item" href="404.html">404 Page</a></li>
                                <li><a class="dropdown-item" href="blog.html">Blog Page</a></li>
                                <li><a class="dropdown-item" href="single-post.html">Blog Single Page</a></li>

                                <li class="dropdown dropdown-submenu dropleft">
                                    <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0201"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Sub Menu <i class="tf-ion-chevron-down"></i></a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdown0201">
                                        <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                        <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                </div>
            </nav>
            <!-- /main nav -->
        </div>
    </header>
    @yield('content')
    <footer id="footer" class="bg-one">
        <div class="top-footer">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                        <h3>about</h3>
                        <p>Pembersihan Micro-Macro cosmos
                            dengang dengan penuh cinta kasih
                            demi menjaga hubungan sesuai dengan Tri Hita Karana dengan dasar
                            Tatwam Asi</p>
                    </div>
                    <!-- End of .col-sm-3 -->

                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <ul>
                            <li>
                                <h3>Our Program</h3>
                            </li>
                            <li><a href="#">Perternakan</a></li>
                            <li><a href="#">Pertanian</a></li>
                            <li><a href="#">Edukasi</a></li>
                            <li><a href="#">Pengelolaan Sampah</a></li>
                            <li><a href="#">Pasar Komunitas Lavandaia</a></li>
                        </ul>
                    </div>
                    <!-- End of .col-sm-3 -->

                    <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
                        <ul>
                            <li>
                                <h3>Quick Links</h3>
                            </li>
                            <li><a href="{{ route('abouts.index') }}">About</a></li>
                            <li><a href="{{ route('programs.index') }}">Program</a></li>
                            <li><a href="{{ route('activities.index') }}">Activity</a></li>
                        </ul>
                    </div>
                    <!-- End of .col-sm-3 -->

                    <div class="col-lg-3 col-md-6">
                        <ul>
                            <li>
                                <h3>Connect with us Socially</h3>
                            </li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#"">Youtube</a></li>
                        </ul>
                    </div>
                    <!-- End of .col-sm-3 -->

                </div>
            </div> <!-- end container -->
        </div>
        <div class="footer-bottom">
            <h5>&copy; Copyright 2023. All rights reserved.</h5>
            <h6>Developed by <b>Tadikamesra</b></h6>
        </div>
    </footer> <!-- end footer -->


    <!-- end Footer Area
========================================== -->
    <!--
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->
    <script src="{{ asset('main/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap4 -->
    <script src="{{ asset('main/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Parallax -->
    <script src="{{ asset('main/plugins/parallax/jquery.parallax-1.1.3.js') }}"></script>
    <!-- lightbox -->
    <script src="{{ asset('main/plugins/lightbox2/js/lightbox.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('main/plugins/slick/slick.min.js') }}"></script>
    <!-- filter -->
    <script src="{{ asset('main/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
    <!-- Smooth Scroll js -->
    <script src="{{ asset('main/plugins/smooth-scroll/smooth-scroll.min.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
    <script src="{{ asset('main/plugins/google-map/gmap.js') }}"></script>

    <!-- Custom js -->
    <script src="{{ asset('main/js/script.js') }}"></script>

</body>

</html>
