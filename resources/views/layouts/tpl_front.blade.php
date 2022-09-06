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


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/plugins/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/home.css') }}">
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

    @include('alert.flash-message')

    @yield('content')
<!--Footer section start-->
<footer class="footer-section section">

    <!-- Footer Top Section Start -->
    <div class="footer-top-section section pt-115 pt-lg-95 pt-md-75 pt-sm-55 pt-xs-45 pb-90 pb-lg-70 pb-md-40 pb-sm-20 pb-xs-15">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget mb-30">
                        <h6 class="title">Contact</h6>
                        <div class="address">
                            <i class="lnr lnr-map-marker"></i>
                            <span>Siege social: Kipé Kakimbo <br> BP-612 Conakry</span>
                        </div>
                        <div class="email">
                            <i class="lnr lnr-envelope"></i>
                            <span>contact@h-consilium.com</span>
                        </div>
                        <div class="phone">+224 664 22 22 21/ +1 514 229 3656</div>
                        <div class="footer-widget-image d-flex mt-35">
                            <a class="mr-5" href="#"><img src="assets/images/app-store/app-store-2.png" alt=""></a>
                            <a href="#"><img src="assets/images/app-store/app-chplay-2.png" alt=""></a>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget mb-30">
                        <h6 class="title">Accès rapides</h6>
                        <div class="footer-widget-link">
                            <ul>
                                <li><a href="#">Acceuil</a></li>
                                <li><a href="#">Emplois</a></li>
                                <li><a href="#">Heuristic</a></li>
                                <li><a href="#">Formations</a></li>
                                <li><a href="#">Actualités</a></li>
                                <li><a href="#">Mon compte</a></li>
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
                            <p>Abonnez-vous à la Newsletter pour recevoir les <strong>notifications</strong> des offres<strong> d'emplois</strong></p>
                            <div class="newsletter-form">
                                <form id="mc-form" class="mc-form">
                                    <input type="email" placeholder="Entrer votre mail..." required="" name="EMAIL">
                                    <button class="ht-btn small-btn" type="submit" value="submit" style="background-color:#0A2254">Envoyer</button>
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
                        <p>&copy;<?= date('Y') ?> <a href="#">Heuristic</a>. Tous les droits reservés.</p>
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

<script src="{{ asset('assets_front/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/front/js/vendor/jquery-3.5.0.min.js') }}"></script>
<script src="{{ asset('assets/front/js/vendor/jquery-migrate-3.1.0.min.js') }}"></script>
<script src="{{ asset('assets/front/js/vendor/bootstrap.bundle.min.js') }}"></script>
<!-- <script src="{{ asset('assets/front/js/plugins') }}/plugins.js"></script> -->

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<script src="{{ asset('assets/front/js/plugins/plugins.min.js') }}"></script>
<script src="{{ asset('assets/front/js/main.js') }}"></script>

</body>

</html>
