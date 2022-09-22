<!--Header section start-->
<header class="header-absolute sb-border header-sticky d-none d-lg-block">
    <div class="main-header">
        <div class="container-fluid pl-50 pl-lg-15 pl-md-15 pr-0">
            <div class="row align-items-center g-0">

                <!--Logo start-->
                <div class="col-xl-2 col-lg-2 col-12">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/front/images/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <!--Logo end-->

                @include('layouts.menu')


                <!-- Cart & Search Area Start -->
                <div class="col-xl-4 col-lg-4 col-12">
                    <div class="header-btn-action d-flex justify-content-end">
                        <div class="btn-action-wrap d-flex">
                            <div class="jp-author-action item" style="background-color: #F96046; color:black">
                                @if(auth()->check())
                                    <a href="{{ Route('monCompte') }}" style="color:black">
                                            <span class="fw-400">
                                                <i class="fas fa-user"></i>
                                                {{ Auth::User()->firstName.' '.Auth::User()->lastName }}
                                            </span>
                                    </a>
                                @else
                                    <a href="{{ Route('user-connexion-inscription') }}" style="color:black">
                                        <span>Vous avez un compte ?</span>
                                        <span class="fw-400">Connectez</span>
                                    </a>
                                @endif
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
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/front/images/logo.png') }}" style="height: 80px; width: 45%;" alt="Multipurpose">
                    </a>
                </div>
                <a class="mobile-close" href="#"></a>
            </div>
            <div class="menu-content">
                <ul class="menulist object-custom-menu">
                    <li>
                        <a href="{{ url('/') }}">
                            <span>Accueil</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('offres-emplois') }}">
                            <span>Offre d'emploi</span>
                        </a>
                    </li>

                    <li class="has-mega-menu">
                        <a href="#">
                            <span>Heuristic</span>
                        </a>
                        <!-- Start Dropdown Menu -->
                        <ul class="object-submenu">
                            <li><a href="{{ url('heuristic').'#services' }}"><span>A propos</span></a></li>
                            <li><a href="{{ url('heuristic').'#who' }}"><span>Carrière</span></a></li>
                            <li><a href="{{ url('actualites') }}"><span>Actualité</span></a></li>
                        </ul>
                        <!-- End Dropdown Menu -->
                    </li>

                    <li>
                        <a href="{{ url('formations') }}">
                            <span>Formations</span>
                        </a>
                    </li>
                    {{-- Menu de la connexion --}}
                    <li>
                        @if(auth()->check())
                            <a href="{{ Route('monCompte') }}">
                                <span class="text">Compte</span>
                            </a>
                        @else
                            <a href="{{ Route('user-connexion-inscription') }}">
                                <span class="text">Connectez</span>
                            </a>
                        @endif
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
                <a class="toggle-btn active" href="{{ url('/') }}">
                    <span><i class="lnr lnr-home"></i></span>
                    <span class="text">Accueil</span>
                </a>
            </li>

            <li>
                <a href="{{ url('offres-emplois') }}">
                    <span><i class="lnr lnr-hand"></i></span>
                    <span class="text">Offres emplois</span>
                </a>
            </li>

            <li>
                <a class="toggle-btn toggle-btn-js" data-target="#job-list-mobile-id" href="#">
                    <span><i class="lnr lnr-list"></i></span>
                    <span class="text">Heuristic</span>
                </a>
            </li>

            <li>
                <a href="{{ url('formations') }}">
                    <span><i class="lnr lnr-alarm"></i></span>
                    <span class="text">Formations</span>
                </a>
            </li>
            <li>
                @if(auth()->check())
                    <a href="{{ Route('monCompte') }}">
                        <span>
                            <i class="lnr lnr-user"></i>
                        </span>
                        <span class="text">Compte</span>
                    </a>
                @else
                    <a href="{{ Route('user-connexion-inscription') }}">
                        <span>
                            <i class="lnr lnr-user"></i>
                        </span>
                        <span class="text">Connectez</span>
                    </a>
                @endif
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
                <h3>Heuristic</h3>
            </div>
        </div>
        <div class="content-popup-scroll">
            <ul class="list-item">
                <li><a href="{{ url('heuristic').'#services' }}"><i class="lnr lnr-printer"></i>A propos </a></li>
                <li><a href="{{ url('heuristic').'#who' }}"><i class="lnr lnr-film-play"></i>Carrière</a></li>
                <li><a href="{{ url('actualites') }}"><i class="lnr lnr-phone"></i>Actualité</a></li>
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
                        <!-- <h2 class="title">Top Recruiting Website</h2>
                        <h3 class="sub-title">For Professionals</h3>
                        <p>Jobs & Job search. Find jobs in global. Executive jobs & work. Employment</p> -->
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!--Hero Item end-->
</div>
<!--slider section end-->
