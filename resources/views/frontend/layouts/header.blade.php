<!doctype html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Consulti - Consulting & Business HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('frontend/assets/images/favicon.ico')}}">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/bootstrap.min.css')}}">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/et-line.css')}}">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/plugins.css')}}">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}">
    
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

<!-- Main Wrapper Start -->
<div class="main-wrapper">

    <!-- Header Section Start -->
    <div class="ht-header-section section">
       
        <!-- Header Top Start -->
        <div class="ht-header-top">
            <div class="container">
                   
                <!-- Header Top Wrap Start -->
                <div class="ht-header-top-wrap row">

                    <!-- Header Top Left Start -->
                    <div class="ht-header-top-left col-md-6 col-12">

                        <!-- Header Top Left Links Start -->
                        <div class="ht-header-top-left-links">

                            <a href="#"><i class="fa fa-phone"></i> +98 558 547 589</a>
                            <a href="#"><i class="fa fa-envelope"></i> demo@example.com</a>

                        </div><!-- Header Top Left Links End -->

                    </div><!-- Header Top Left End -->

                    <!-- Header Top Right Start -->
                    <div class="ht-header-top-right col-md-6 col-12">

                        <!-- Header Top Right Social Start -->
                        <div class="ht-header-top-right-social">

                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>

                        </div><!-- Header Top Right Social End -->

                        <!-- Header Top Right Language Start -->
                        <div class="ht-header-top-right-language">

                            <ul>
                                <li><a href="#">English <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-list">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Dutch</a></li>
                                        <li><a href="#">Russian</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </div><!-- Header Top Right Language End -->

                    </div><!-- Header Top Right End -->

                </div><!-- Header Top Wrap End -->
                    
            </div>
        </div><!-- Header Top End -->
       
        <!-- Header Bottom One Start -->
        <div class="ht-header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        
                        <!-- Header Bottom One Wrap Start -->
                        <div class="ht-header-bottom-wrap">
                            
                            <a href="{{url('/')}}" class="ht-logo float-start"><img src="{{url('frontend/assets/images/logo.png')}}" alt="Logo"></a>
                            
                            <!-- Main Menu One Start -->
                            <div class="ht-main-menu float-end">
                                <nav>
                                    <ul>
                                        <li class="{{(request()->is('/')) ? 'active' : '' }}"><a href="{{url('/')}}">home</a></li>
                                        <li class="{{(request()->is('about')) ? 'active' : '' }}"><a href="{{url('/about')}}">about</a></li>
                                        <li class="{{(request()->is('service')) ? 'active' : '' }}"><a href="{{url('/service')}}">service</a>
                                            <ul class="ht-sub-menu dropdown-list">
                                                <li><a href="{{url('/service')}}">service</a></li>
                                                <li><a href="service-details-financial.html">service details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="practice-area.html">practice area</a>
                                            <ul class="ht-sub-menu dropdown-list">
                                                <li><a href="practice-area.html">practice area</a></li>
                                                <li><a href="practice-details.html">practice details</a></li>
                                            </ul>
                                        </li>
                                        <li class="{{(request()->is('blog')) ? 'active' : '' }}"><a href="{{url('/blog')}}">blog</a>
                                            <ul class="ht-sub-menu dropdown-list">
                                                <li><a href="{{url('/blog')}}">blog</a></li>
                                                <li><a href="blog-2-column.html">blog 2 column</a></li>
                                                <li><a href="blog-3-column.html">blog 3 column</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul>
                                        </li>
                                        <li class="{{(request()->is('contact')) ? 'active' : '' }}"><a href="{{url('/contact')}}">contact</a></li>
                                    </ul>
                                </nav>
                            </div><!-- Main Menu One End -->
                            
                            <div class="ht-mobile-menu"></div>
                            
                        </div><!-- Header Bottom One Wrap End -->
                        
                    </div>
                </div>
            </div>
        </div><!-- Header Bottom One End -->
        
    </div><!-- Header Section End -->
