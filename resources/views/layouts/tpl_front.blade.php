<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HCONSULTING</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/vendor/iconfont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/vendor/helper.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/front/css/plugins/plugins.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/plugins/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    <!-- Modernizr JS -->
    <script src="{{ asset('assets/front/js/vendor/modernizr-3.10.0.min.js') }}"></script>
    <style>
        .menu-item:hover::after{
            content : none !important;
            background-color: inherit !important;
        }

        .menu-item:hover::before{
            content : none !important;
            background-color: inherit !important;
        }
    </style>
</head>

<body class="template-color-3">

<div id="main-wrapper">
<!--Header section start-->
<header class="header-absolute sb-border header-sticky d-none d-lg-block">
    <div class="main-header">
        <div class="container-fluid pl-50 pl-lg-15 pl-md-15 pr-0">
            <div class="row align-items-center g-0">

                <!--Logo start-->
                <div class="col-xl-2 col-lg-2 col-12">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('assets/front/images/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <!--Logo end-->

                <!--Menu start-->
                <div class="col-xl-6 col-lg-6 col-12">
                    <nav class="main-menu">
                        <ul>
                            <li class="menu-item"><a href="#">Accueil</a></li>
                            <li class="menu-item"><a href="#">Emploi</a></li>
                            <li><a href="#">Heuristic <small class="icon-arrow"></small></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Nous-connaitre</a></li>
                                    <li><a href="#">Nos services</a></li>
                                    <li><a href="#">Notre équipe</a></li>
                                    <li><a href="#">Carrière</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="#">Formations</a></li>
                            <li class="menu-item"><a href="#">Actualités</a></li>
                        </ul>
                    </nav>
                </div>
                <!--Menu end-->

                <!-- Cart & Search Area Start -->
                <div class="col-xl-4 col-lg-4 col-12">
                    <div class="header-btn-action d-flex justify-content-end">
                        <div class="btn-action-wrap d-flex">
                            <div class="jp-author item">
                                <a href="login-register.html">
                                    <i class="lnr lnr-user"></i>
                                    <span>Connexion</span>
                                </a>
                            </div>
                            <div class="jp-author-action item">
                                <a href="#quick-view-modal-container" data-toggle="modal"> <span>Vous êtes employeur ?</span> <span class="fw-400">Poster une offre</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cart & Search Area End -->
            </div>

        </div>
    </div>
</header>
<!--Header section end-->

<!--Header Mobile section start-->
<header class="header-mobile bg_color--2 d-block d-lg-none">
    <div class="header-bottom menu-right">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-mobile-navigation d-block d-lg-none">
                        <div class="row align-items-center">
                            <div class="col-3 col-md-3">
                                <div class="mobile-navigation text-right">
                                    <div class="header-icon-wrapper">
                                        <ul class="icon-list justify-content-start">
                                            <li class="popup-mobile-click">
                                                <a href="javascript:void(0)"><i class="lnr lnr-menu"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="header-logo text-center">
                                    <a href="index.html">
                                        <img src="assets/images/logo-mobile.png" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-3 col-md-3">
                                <div class="mobile-navigation text-right">
                                    <div class="header-icon-wrapper">
                                        <ul class="icon-list justify-content-end">
                                            <li>
                                                <div class="header-cart-icon">
                                                    <a href="#" class="header-search-toggle"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <div class="header-search-form">
                                                    <form action="#">
                                                        <input type="text" placeholder="Type and hit enter">
                                                        <button><i class="lnr lnr-magnifier"></i></button>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
<!--Header Mobile section end-->

<!-- Start Popup Menu -->
<div class="popup-mobile-manu popup-mobile-visiable">
    <div class="inner">
        <div class="mobileheader">
            <div class="logo">
                <a href="index.html">
                    <img src="assets/images/logo-mobile.png" alt="Multipurpose">
                </a>
            </div>
            <a class="mobile-close" href="#"></a>
        </div>
        <div class="menu-content">
            <ul class="menulist object-custom-menu">
                <li class="has-mega-menu"><a href="#"><span>Home</span></a>
                    <!-- Start Dropdown Menu -->
                    <ul class="object-submenu">
                        <li><a href="index.html"><span>Home V1</span></a></li>
                        <li><a href="index-2.html"><span>Home V2</span></a></li>
                        <li><a href="index-3.html"><span>Home V3</span></a></li>
                        <li><a href="index-4.html"><span>Home V4</span></a></li>
                    </ul>
                    <!-- End Dropdown Menu -->
                </li>

                <li class="has-mega-menu"><a href="#"><span>Jobs</span></a>
                    <!-- Start Dropdown Menu -->
                    <ul class="object-submenu">
                        <li><a href="job-listing.html"><span>Jobs Listing</span></a></li>
                        <li><a href="job-with-map.html"><span>Jobs With Map</span></a></li>
                        <li><a href="job-details.html"><span>Job Detail V1</span></a></li>
                        <li><a href="job-details-two.html"><span>Job Detail V2</span></a></li>
                    </ul>
                    <!-- End Dropdown Menu -->
                </li>

                <li class="has-mega-menu"><a href="#"><span>Candidates</span></a>
                    <!-- Start Dropdown Menu -->
                    <ul class="object-submenu">
                        <li><a href="candidates-listing.html"><span>Candidates Listing</span></a></li>
                        <li><a href="candidate-details.html"><span>Candidate Details V1</span></a></li>
                        <li><a href="candidate-details-two.html"><span>Candidate Details V2</span></a></li>
                    </ul>
                    <!-- End Dropdown Menu -->
                </li>

                <li class="has-mega-menu"><a href="#"><span>Employers</span></a>
                    <!-- Start Dropdown Menu -->
                    <ul class="object-submenu">
                        <li><a href="employer-listing.html"><span>Employers Listing</span></a></li>
                        <li><a href="employer-details.html"><span>Employer Detail V1</span></a></li>
                        <li><a href="employer-details-two.html"><span>Employer Detail V2</span></a></li>
                    </ul>
                    <!-- End Dropdown Menu -->
                </li>

                <li class="has-mega-menu"><a href="#"><span>Blog</span></a>
                    <!-- Start Dropdown Menu -->
                    <ul class="object-submenu">
                        <li><a href="blog.html"><span>Blog</span></a></li>
                        <li><a href="blog-details.html"><span>Blog Details</span></a></li>
                    </ul>
                    <!-- End Dropdown Menu -->
                </li>

                <li class="has-mega-menu"><a href="#"><span>Pages</span></a>
                    <!-- Start Dropdown Menu -->
                    <ul class="object-submenu">
                        <li><a href="about.html"><span>About Us</span></a></li>
                        <li><a href="contact.html"><span>Contact Us</span></a></li>
                        <li><a href="faq.html"><span>FAQS</span></a></li>
                        <li><a href="pricing.html"><span>Pricing & Plan</span></a></li>
                        <li><a href="login-register.html"><span>Login / Register</span></a></li>
                        <li><a href="dashboard.html"><span>Dashboard</span></a></li>
                        <li><a href="shop.html"><span>Shop</span></a></li>
                        <li><a href="product-details.html"><span>Product Details</span></a></li>
                        <li><a href="cart.html"><span>Cart</span></a></li>
                        <li><a href="checkout.html"><span>Checkout</span></a></li>
                        <li><a href="wishlist.html"><span>Wishlist</span></a></li>
                        <li><a href="404.html"><span>404 Error</span></a></li>
                    </ul>
                    <!-- End Dropdown Menu -->
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Popup Menu -->

<!-- Bottom Navbar Mobile Start -->
<div class="bottom-navbar-mobile section d-block d-lg-none">
    <nav>
        <ul class="list-actions">
            <li>
                <a class="toggle-btn active" href="index.html">
                    <span><i class="lnr lnr-home"></i></span>
                    <span class="text">Home</span>
                </a>
            </li>
            <li>
                <a class="toggle-btn toggle-btn-js" data-target="#job-list-mobile-id" href="#">
                    <span><i class="lnr lnr-list"></i></span>
                    <span class="text">Jobs list</span>
                </a>
            </li>
            <li>
                <a href="login-register.html">
                    <span><i class="lnr lnr-heart"></i></span>
                    <span class="text">Save</span>
                </a>
            </li>
            <li>
                <a class="toggle-btn-two toggle-btn-js" data-target="#notifications-mobile-id" href="#">
                    <span><i class="lnr lnr-alarm"></i></span>
                    <span class="text">Notifications</span>
                </a>
            </li>
            <li>
                <a href="login-register.html">
                    <span><i class="lnr lnr-user"></i></span>
                    <span class="text">Account</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
<!-- Bottom Navbar Mobile End -->

<!-- Bottom Navbar Mobile Popup Start -->
<div class="mobile-popup">
    <div class="job-list-mobile" id="job-list-mobile-id">
        <div class="heading">
            <div class="title">
                <i class="lnr lnr-list"></i>
                <h3>All Jobs list</h3>
            </div>
            <a class="view-all" href="#">See all jobs</a>
        </div>
        <div class="content-popup-scroll">
            <ul class="list-item">
                <li><a href="job-listing.html"><i class="lnr lnr-printer"></i>Accounting </a></li>
                <li><a href="job-listing.html"><i class="lnr lnr-film-play"></i>Broadcasting </a></li>
                <li><a href="job-listing.html"><i class="lnr lnr-phone"></i>Customer Service </a></li>
                <li><a href="job-listing.html"><i class="lnr lnr-bullhorn"></i>Digital Marketing </a></li>
                <li><a href="job-listing.html"><i class="lnr lnr-chart-bars"></i>Finance & Accounting </a></li>
                <li><a href="job-listing.html"><i class="lnr lnr-smartphone"></i>Game Mobile </a></li>
                <li><a href="job-listing.html"><i class="lnr lnr-picture"></i>Graphics & Design </a></li>
                <li><a href="job-listing.html"><i class="lnr lnr-home"></i>Graphics & Design </a></li>
                <li><a href="job-listing.html"><i class="lnr lnr-database"></i>Medical Doctor </a></li>
                <li><a href="job-listing.html"><i class="lnr lnr-dinner"></i>Restaurant </a></li>
            </ul>
        </div>
    </div>
    <div class="notifications-mobile" id="notifications-mobile-id">
        <div class="heading">
            <div class="title">
                <i class="lnr lnr-list"></i>
                <h3>All Notifications</h3>
            </div>
            <a class="view-all" href="#">See all jobs</a>
        </div>
        <div class="content-popup-scroll">
            <ul class="list-item">
                <li><a href="login-register.html"><i class="lnr lnr-book"></i><span><b class="highlight">Register now</b> to reach dream jobs easier.</span> </a></li>
                <li><a href="job-with-map.html"><i class="lnr lnr-book"></i><span><b class="highlight">Job suggestion</b> you might be interested based on your profile.</span> </a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Bottom Navbar Mobile Popup End -->

<!--slider section start-->
<div class="hero-section section position-relative">
    <!--Hero Item start-->
    <div class="hero-item bg_image--1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!--Hero Content start-->
                    <div class="hero-content-2 left">
                        <h2 class="title">Top Recruiting Website</h2>
                        <h3 class="sub-title">For Professionals</h3>
                        <p>Jobs & Job search. Find jobs in global. Executive jobs & work. Employment</p>

                        <div class="job-search-wrap mt-90 mt-md-70 mt-sm-50 mt-xs-30">
                            <div class="job-search-form">
                                <form action="#">
                                    <div class="row row-5">
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <!-- Single Field Item Start  -->
                                            <div class="single-field-item">
                                                <i class="lnr lnr-magnifier"></i>
                                                <input placeholder="What jobs you want?" name="keyword" type="text">
                                            </div>
                                            <!-- Single Field Item End  -->
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                            <!-- Single Field Item Start  -->
                                            <div class="single-field-item">
                                                <i class="lnr lnr-list"></i>
                                                <select class="nice-select wide">
                                                    <option value="1">All categories</option>
                                                    <option value="2">Accounting</option>
                                                    <option value="3">Broadcasting</option>
                                                    <option value="4">Customer Service</option>
                                                    <option value="5">Digital Marketing</option>
                                                    <option value="6">Finance & Accounting</option>
                                                    <option value="7">Game Mobile</option>
                                                    <option value="8">Graphics & Design</option>
                                                    <option value="9">Human Resources</option>
                                                    <option value="10">Medical Doctor</option>
                                                    <option value="11">Restaurant</option>
                                                    <option value="12">Sale & Marketing</option>
                                                    <option value="13">Sale Assistance</option>
                                                    <option value="14">Science & Analitycs</option>
                                                    <option value="15">Teachers</option>
                                                    <option value="16">Web & Software Dev</option>
                                                    <option value="17">Writing & Translations</option>
                                                </select>
                                            </div>
                                            <!-- Single Field Item End  -->
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                            <!-- Single Field Item Start  -->
                                            <div class="single-field-item">
                                                <i class="lnr lnr-map-marker"></i>
                                                <input class="input-field input-field-location" placeholder="Location" name="location" type="text">
                                                <span class="btn-action-location">
                                                <i class="far fa-dot-circle"></i>
                                            </span>
                                            </div>
                                            <!-- Single Field Item End  -->
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                                            <div class="submit-btn">
                                                <button class="ht-btn" type="submit"> Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="trending-keywords">
                                <div class="keywords">
                                    <span class="title">Trending Keywords</span>
                                    <ul>
                                        <li><a href="#">Account Manager</a></li>
                                        <li><a href="#">Administrative</a></li>
                                        <li><a href="#">Android</a></li>
                                        <li><a href="#">Angular</a></li>
                                        <li><a href="#">app</a></li>
                                        <li><a href="#">ASP.NET</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--Hero Content end-->

                </div>
            </div>
        </div>
    </div>
    <!--Hero Item end-->
</div>
<!--slider section end-->


    @yield('content')
<!--Footer section start-->
<footer class="footer-section section">

    <!-- Footer Top Section Start -->
    <div class="footer-top-section section pt-115 pt-lg-95 pt-md-75 pt-sm-55 pt-xs-45 pb-90 pb-lg-70 pb-md-40 pb-sm-20 pb-xs-15">
        <div class="container">
            <div class="row">

                <div class="col-xl-4 col-lg-3 col-md-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget mb-30">
                        <h6 class="title">Contact Info</h6>
                        <div class="address">
                            <i class="lnr lnr-map-marker"></i>
                            <span>8375 E. Heather Drive Tonawanda, Manchester 14150, United Kingdom</span>
                        </div>
                        <div class="email">
                            <i class="lnr lnr-envelope"></i>
                            <span>jopota@recruitment.com</span>
                        </div>
                        <div class="phone theme-color">(+1) 000 987-1234</div>
                        <div class="footer-widget-image d-flex mt-35">
                            <a class="mr-5" href="#"><img src="assets/images/app-store/app-store-2.png" alt=""></a>
                            <a href="#"><img src="assets/images/app-store/app-chplay-2.png" alt=""></a>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>

                <div class="col-xl-2 col-lg-2 col-md-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget mb-30">
                        <h6 class="title">Useful Links</h6>
                        <div class="footer-widget-link">
                            <ul>
                                <li><a href="#">Press Corner</a></li>
                                <li><a href="#">Policy Privacy</a></li>
                                <li><a href="#">Terms And Conditions</a></li>
                                <li><a href="#">Partner</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>

                <div class="col-xl-2 col-lg-3 col-md-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget mb-30">
                        <h6 class="title">Featured Jobs</h6>
                        <div class="footer-widget-link">
                            <ul>
                                <li><a href="#">Teachers</a></li>
                                <li><a href="#">Accounting</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Digital Marketing</a></li>
                                <li><a href="#">Web & Software Dev</a></li>
                                <li><a href="#">Science & Analitycs</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget mb-30">
                        <h6 class="title">Newsletter</h6>
                        <div class="newsletter">
                            <p>Join our email subscription now to get updates on <strong>new jobs</strong> and <strong>notifications</strong>.</p>
                            <div class="newsletter-form">
                                <form id="mc-form" class="mc-form">
                                    <input type="email" placeholder="Enter Your email..." required="" name="EMAIL">
                                    <button class="ht-btn small-btn" type="submit" value="submit">Subscribe</button>
                                </form>
                            </div>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top Section End -->

    <!--Footer bottom start-->
    <div class="footer-bottom section fb-60">
        <div class="container">
            <div class="row g-0 st-border pt-35 pb-35 align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright">
                        <p>&copy;2020 <a href="https://hasthemes.com/">Jetapo</a>. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-google"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer bottom end-->

</footer>
<!--Footer section end-->

<!-- Modal Area Start -->
<div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-xl-12 col-lg-12">
                    <div class="row g-0">

                        <div class="col-lg-4">
                            <div class="login-register-form-area">
                                <div class="login-tab-menu">
                                    <ul class="nav">
                                        <li><a class="active show" data-bs-toggle="tab" href="#login">Login</a></li>
                                        <li><a data-bs-toggle="tab" href="#register">Register</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div id="login" class="tab-pane fade show active">
                                        <div class="login-register-form">
                                            <form action="#" method="post">
                                                <p>Login to Jotopa with your registered account</p>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Username or Email" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="single-input">
                                                            <input type="password" placeholder="Password" name="password">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="checkbox-input">
                                                            <input type="checkbox" name="login-form-remember" id="login-form-remember">
                                                            <label for="login-form-remember">Remember me</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-25"><button class="ht-btn">Login</button></div>
                                                </div>
                                            </form>
                                            <div class="divider">
                                                <span class="line"></span>
                                                <span class="circle">or login with</span>
                                            </div>
                                            <div class="social-login">
                                                <ul class="social-icon">
                                                    <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                                                    <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a class="google" href="#"><i class="fab fa-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="register" class="tab-pane fade">
                                        <div class="login-register-form">
                                            <form action="#" method="post">
                                                <p>Create Your account</p>
                                                <div class="row row-5">
                                                    <div class="col-12">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Your Username" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="single-input">
                                                            <input type="email" placeholder="Your Email Address" name="emain">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="single-input">
                                                            <input type="password" placeholder="Password" name="password">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="single-input">
                                                            <input type="password" placeholder="Confirm Password" name="conPassword">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="checkbox-input">
                                                            <input type="checkbox" name="login-form-candidate" id="login-form-candidate">
                                                            <label for="login-form-candidate">I am a candidate</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="checkbox-input">
                                                            <input type="checkbox" name="login-form-employer" id="login-form-employer">
                                                            <label for="login-form-employer">I am a employer</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="register-account">
                                                            <input id="register-terms-conditions" type="checkbox" class="checkbox" checked="" required="">
                                                            <label for="register-terms-conditions">I read and agree to the <a href="#">Terms &amp; Conditions</a> and <a href="#">Privacy Policy</a></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-25"><button class="ht-btn">Register</button></div>
                                                </div>
                                            </form>
                                            <div class="divider">
                                                <span class="line"></span>
                                                <span class="circle">or login with</span>
                                            </div>
                                            <div class="social-login">
                                                <ul class="social-icon">
                                                    <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                                                    <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a class="google" href="#"><i class="fab fa-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="login-instruction">
                                <div class="login-instruction-content">
                                    <h3 class="title">Why Login To Us</h3>
                                    <p>It’s important for you to have an account and login in order to have full access at Jotopa. We need to know your account details in order to allow work together</p>
                                    <ul class="list-reasons">
                                        <li class="reason">Be alerted to the latest jobs</li>
                                        <li class="reason">Apply for jobs with a single click</li>
                                        <li class="reason">Showcase your CV to thousands of employers</li>
                                        <li class="reason">Keep a record of all your applications</li>
                                    </ul>
                                    <span class="sale-text theme-color border-color">Login today &amp; Get 15% Off Coupon for the first planning purchase</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Modal Area End -->


<!-- Placed js at the end of the document so the pages load faster -->


</div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="{{ asset('assets/front/js/vendor/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/vendor/jquery-migrate-3.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/front/js/plugins') }}/plugins.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="{{ asset('assets/front/js/plugins/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/main.js') }}"></script>

    

</body>

</html>