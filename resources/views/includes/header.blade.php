<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <?php 
    $logo = session('logo');
    ?>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/'.$logo) }}">
        
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/xsIcon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/iconmoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/isotope.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-7134018287900158",
          enable_page_level_ads: true
     });
</script>

<script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
</script>

</head>
<body>
<!--[if lt IE 10]>
    your browser</a> to improve your experience.</p>
<![endif]-->
<div id="preloader">
    <div class="preloader-wrapper">
        <div class="la-ball-clip-rotate-pulse la-2x">
            <div></div>
            <div></div>
        </div>
    </div>
    <a href="#" class="cancel-preloader">Cancel Preloader</a>
</div>	<!-- END prelaoder -->

<!-- header top section -->
<section class="xs-header-top">
	<div class="container">
	    <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="header-top-info">
                    <ul>
                        <li><i class="icon icon-map-marker2"></i> <?php echo session('address'); ?> </li>
                        <li><i class="icon icon-envelope"></i> <a href="mailto:<?php echo session('email'); ?>" style="text-decoration:none;color:white;"><?php echo session('email'); ?></a> </li>
                    </ul>
                </div>
            </div><!-- .col end -->

            <div class="col-lg-6 align-self-center col-md-4">
                <div class="header-top-social">
                    <ul>
                       <li><a href="<?php echo session('fb'); ?>"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?php echo session('twitter'); ?>"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href="<?php echo session('gplus'); ?>"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="<?php echo session('insta'); ?>"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div><!-- .col end -->
        </div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- End header section -->

<!-- header middle section -->
<section class="xs-header-middle">
	<div class="container">
	    <div class="row">
            <div class="col-md-3 align-self-center">
                <div class="logo">
                    <a href="/">
                        <h3><img src="{{ asset('assets/images/'.$logo) }}" alt="{{ asset('assets/images/'.$logo) }}" style="bacground:white;"></h3>
                    </a>
                </div>
            </div>
            <div class="align-self-center col-md-9">
                <div class="header-middle-info float-right">
                    <ul>
                    
                        <li>
                            <i class="icon-number_1"></i>
                            <label>Best Multimedia Company</label>
                            <p>Service provider of 2018</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
	</div><!-- .container end -->
</section><!-- End header middle section -->

<!-- header nav section -->
<header class="xs-header-nav">
    <div class="container">
        <div class="row  menu-item">
            <div class="col-lg-12">
                <nav id="navigation1"    class="navigation header-nav clearfix">
                    <div class="nav-header">
                        <!--  <a class="nav-brand" href="#"></a>-->
                        <a href="/" class="mobile-logo">
                     <h1><?php echo session('name'); ?></h1></a>
                        <div class="nav-toggle"></div>
                    </div>
                    <div class="nav-menus-wrapper clearfix">
                        <ul class="nav-menu">
                            <li class="{{ Request::url() == url('/') ? 'bg-primary' : '' }}"><a href="/">Home</a></li>
                                <li class="{{ Request::url() == url('/about-us') ? 'bg-primary' : '' }}"><a href="/about-us">About</a></li>
                                <li class="{{ Request::url() == url('/our-services') ? 'bg-primary' : '' }}"><a href="/our-services">Services</a></li>
                                <li class="{{ Request::url() == url('/gallery') ? 'bg-primary' : '' }}"><a href="/gallery">Gallery</a></li>
                                <li class="{{ Request::url() == url('/contact-us') ? 'bg-primary' : '' }}"><a href="/contact-us">Contacts</a></li>
                            <li>
                        </ul>
                         <div class="header-nav-right-info align-to-right">
                            <label><i class="icon icon-phone3"></i> <?php echo session('tel'); ?> </label>
                        </div> 
                    </div>
                </nav>
            </div>
        </div><!-- .row end -->
    </div><!-- .container end -->
</header><!-- End header nav section -->
<body>