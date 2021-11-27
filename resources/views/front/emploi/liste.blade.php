@extends('layouts.tpl_front')
@section('content')
        @include("layouts.header_page")
        <!-- Breadcrumb Section Start -->
        <div class="breadcrumb-section section bg_color--5 pt-60 pt-sm-50 pt-xs-40 pb-60 pb-sm-50 pb-xs-40">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-breadcrumb-content">
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Jobs Listing</li>
                            </ul>
                            <h1>Jobs Listing</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section Start -->

        <!-- Job Listing Section Start -->
        <div class="job-listing-section section bg_color--5 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row g-0">

                    <div class="col-lg-4 order-lg-1 order-2 pr-55 pr-md-15 pr-sm-15 pr-xs-15">
                        <div class="sidebar-wrapper-two mt-sm-40 mt-xs-40">
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">Find a job</h2>
                                <div class="sidebar-search-form-two">
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" name="search" placeholder="Search...">
                                            <i class="lnr lnr-magnifier"></i>
                                        </div>
                                        <button type="submit" class="ht-btn theme-btn theme-btn-two w-100">Search</button>
                                    </form>
                                </div>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">Experience</h2>
                                <ul class="sidebar-cbx-list">
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="experience-cbx">
                                            <label for="experience-cbx">> 5 years (1)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="experience-cbx-two">
                                            <label for="experience-cbx-two"> &lt; 1 year (5)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="experience-cbx-three">
                                            <label for="experience-cbx-three">1-3 years (10)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="experience-cbx-four">
                                            <label for="experience-cbx-four">3-5 years (4)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">Location</h2>
                                <div class="sidebar-location-form">
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" name="search" placeholder="Enter location">
                                            <i class="far fa-dot-circle"></i>
                                        </div>
                                    </form>
                                </div>
                                <div class="sidebar-location-range mt-10">
                                    <div class="location-range">
                                        <label for="amount">Radius:</label>
                                        <input type="text" id="amount" readonly>
                                    </div>
                                    <div id="slider-range-min"></div>
                                </div>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">salaries</h2>
                                <div class="sidebar-salary">
                                    <div id="salary-range" class="mb-20"></div>
                                    <div class="salary-range-group">
                                        <label for="salary-amount-txt">Salary range:</label>
                                        <input type="text" id="salary-amount-txt" class="salary-amount" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">Type</h2>
                                <ul class="sidebar-cbx-list">
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="type-cbx">
                                            <label for="type-cbx">Contract (0)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="type-cbx-two">
                                            <label for="type-cbx-two"> Freelancer (3)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="type-cbx-three">
                                            <label for="type-cbx-three">Full Time (13)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="type-cbx-four">
                                            <label for="type-cbx-four">Internship (1)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="type-cbx-five">
                                            <label for="type-cbx-five">Part Time (2)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="type-cbx-six">
                                            <label for="type-cbx-six">Remote (2)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="type-cbx-seven">
                                            <label for="type-cbx-seven">Temporary (2)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">Level</h2>
                                <ul class="sidebar-cbx-list">
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="level-cbx">
                                            <label for="level-cbx">Junior (1)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="level-cbx-two">
                                            <label for="level-cbx-two"> Manager (6)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="level-cbx-three">
                                            <label for="level-cbx-three">Professional (3)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="level-cbx-four">
                                            <label for="level-cbx-four">Senior (3)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">Skills</h2>
                                <ul class="sidebar-tag">
                                    <li><a href="#">Account Manager</a></li>
                                    <li><a href="#">Administrative</a></li>
                                    <li><a href="#">Android</a></li>
                                    <li><a href="#">Angular</a></li>
                                    <li><a href="#">app</a></li>
                                    <li><a href="#">ASP.NET</a></li>
                                    <li><a href="#">Automotive</a></li>
                                    <li><a href="#">Banner</a></li>
                                </ul>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">Company Spotlight</h2>
                                <div class="sidebar-emp-slider">
                                    <div class="col-lg-4 d-flex flex-column">
                                        <!-- Single Employer Item Start -->
                                        <div class="single-employer-item">
                                            <div class="image-featured">
                                                <img src="assets/images/employer/cover-image-employer-2.jpg" alt="">
                                            </div>
                                            <div class="item-content">
                                                <div class="avatar">
                                                    <img src="assets/images/companies_logo/logo-100/logo2.jpg" alt="">
                                                </div>
                                                <h4 class="title"><a href="#">Digital Asset</a></h4>
                                                <div class="meta">
                                                    <div class="star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="location"><i class="lnr lnr-map-marker"></i>Beijing, China </span>
                                                    <span class="count-job theme-color">1 Jobs </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Employer Item End -->
                                    </div>

                                    <div class="col-lg-4 d-flex flex-column">
                                        <!-- Single Employer Item Start -->
                                        <div class="single-employer-item">
                                            <div class="image-featured">
                                                <img src="assets/images/employer/cover-image-employer-3.jpg" alt="">
                                            </div>
                                            <div class="item-content">
                                                <div class="avatar">
                                                    <img src="assets/images/companies_logo/logo-100/logo3.jpg" alt="">
                                                </div>
                                                <h4 class="title"><a href="#">Inwave Studio </a></h4>
                                                <div class="meta">
                                                    <div class="star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="location"><i class="lnr lnr-map-marker"></i>Chicago, IL, USA </span>
                                                    <span class="count-job theme-color">2 Jobs </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Employer Item End -->
                                    </div>

                                    <div class="col-lg-4 d-flex flex-column">
                                        <!-- Single Employer Item Start -->
                                        <div class="single-employer-item">
                                            <div class="image-featured">
                                                <img src="assets/images/employer/cover-image-employer-4.jpg" alt="">
                                            </div>
                                            <div class="item-content">
                                                <div class="avatar">
                                                    <img src="assets/images/companies_logo/logo-100/logo4.jpg" alt="">
                                                </div>
                                                <h4 class="title"><a href="#">Vsmarttech </a></h4>
                                                <div class="meta">
                                                    <div class="star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="location"><i class="lnr lnr-map-marker"></i>London Euston, London, UK </span>
                                                    <span class="count-job theme-color">1 Jobs </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Employer Item End -->
                                    </div>
                                </div>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <div class="sidbar-image">
                                    <a href="#">
                                        <img src="assets/images/banner/ads.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 order-lg-2 order-1">
                        <div class="filter-form">
                            <div class="result-sorting">
                                <div class="total-result">
                                    <span class="total">(22)</span>
                                    Jobs &amp; Vacancies
                                </div>
                                <div class="job-alert-form">
                                    <span class="btn-open-form">
                                    <i class="lnr lnr-envelope"></i>
                                    Email me jobs like these 
                                </span>
                                    <div class="job-alert-form-box">
                                        <h3 class="title"> Email me jobs like these</h3>
                                        <div class="btn-close-form"><i class="lnr lnr-cross-circle"></i></div>
                                        <form action="#">
                                            <div class="newsletter">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <input type="text" name="alert-name" placeholder="Job alert name..." class="alert-name">
                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="email" class="alert-email" placeholder="example@email.com" name="alert-email">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button class="ht-btn">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="form-left">
                                    <div class="sort-by">
                                        <form action="#">
                                            <label class="text-sortby">Sort by:</label>
                                            <select class="nice-select">
                                                <option value="1">Title</option>
                                                <option value="2">Date</option>
                                                <option value="3">Salary</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div class="layout-switcher">
                                        <ul class="nav">
                                            <li><a class="active show" data-bs-toggle="tab" href="#list"><i class="fa fa-list"></i></a></li>
                                            <li><a data-bs-toggle="tab" href="#grid"><i class="fa fa-th"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="list" class="tab-pane fade show active">
                                <div class="row">
                                    @if($offresEmplois)
                                        @foreach($offresEmplois as $item)
                                        <div class="col-lg-12 mb-20">
                                            <!-- Single Job Start  -->
                                            <div class="single-job style-two">
                                                <div class="info-top">
                                                    <div class="job-image">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/img/offres-emplois/'. $item->image) }}" alt="logo">
                                                        </a>
                                                    </div>
                                                    <div class="job-info">
                                                        <div class="job-info-inner">
                                                            <div class="job-info-top">
                                                                <div class="saveJob for-listing">
                                                                    <!-- <span class="featured-label">featured</span> -->
                                                                    <a class="job-type-label ml-20 mr-20">{{ $item->type->nom }}</a>
                                                                    <a class="save-job" href="#quick-view-modal-container" data-toggle="modal">
                                                                        <i class="far fa-heart"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="title-name">
                                                                    <h3 class="job-title">
                                                                        <a href="#">{{ $item->titre }}</a>
                                                                    </h3>
                                                                    <div class="employer-name">
                                                                        <a href="#">{{ $item->entreprise->raison_sociale }}</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="job-meta-two">
                                                                <!-- <div class="field-salary_from">
                                                                    $500 - $1,000 / month
                                                                </div> -->
                                                                <div class="field-datetime"><i class="lnr lnr-clock"></i>{{ "Posté il y'a environ ".\App\Models\Emploi::nombreDejourDuPoste($item->date_publication) }}</div>
                                                                <div class="field-map"><i class="lnr lnr-map-marker"></i>{{ \App\Models\Emploi::getVilles($item->id) }}</div>
                                                            </div>
                                                            @if(count(\App\Models\Emploi::getDomaines($item->id)) > 0)
                                                                <div class="job-skill-tag">
                                                                    @foreach(\App\Models\Emploi::getDomaines($item->id) as $domaine)
                                                                        <a href="#">{{ $domaine->nom }}</a>
                                                                    @endforeach
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Job End -->
                                        </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="page-pagination">
                                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="grid" class="tab-pane fade">
                                <div class="row">

                                    <div class="col-md-6 mb-20">
                                        <!-- Single Job Start  -->
                                        <div class="single-job-grid-two">
                                            <div class="saveJob-grid">
                                                <a class="job-type-label remote" href="#">Remote</a>
                                                <a class="save-job" href="#quick-view-modal-container" data-toggle="modal">
                                                    <i class="far fa-heart"></i>Save </a>
                                            </div>
                                            <div class="job-image">
                                                <a href="#">
                                                    <img src="assets/images/companies_logo/logo-100/logo1.jpg" alt="">
                                                </a>
                                                <span class="featured-label for-grid">featured</span>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-info-top">
                                                    <div class="title-name">
                                                        <h3 class="job-title">
                                                            <a href="#">Chief Accountant</a>
                                                        </h3>
                                                        <div class="employer-name">
                                                            <a href="employer-details.html">Shippo Company</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="job-meta-two">
                                                    <div class="field-salary_from">
                                                        <i class="gj-icon gj-icon-money"></i>
                                                        $500 - $1,000 / month
                                                    </div>
                                                    <div class="field-datetime"><i class="lnr lnr-clock"></i>8 months ago</div>
                                                    <div class="field-map"><i class="lnr lnr-map-marker"></i>Hanoi, Hanoi</div>
                                                </div>
                                                <div class="field-descriptions">
                                                    <p>International collaborative, high-energy environmentCompetitive salary and great benefits, English training provided About Our Client Our…</p>
                                                </div>
                                                <div class="job-skill-tag">
                                                    <a href="#">Android</a>
                                                    <a href="#">app</a>
                                                    <a href="#">ReactJs</a>
                                                    <a href="#">Ruby</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Job End -->
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <!-- Single Job Start  -->
                                        <div class="single-job-grid-two">
                                            <div class="saveJob-grid">
                                                <a class="job-type-label" href="#">Full Time</a>
                                                <a class="save-job" href="#quick-view-modal-container" data-toggle="modal">
                                                    <i class="far fa-heart"></i>Save </a>
                                            </div>
                                            <div class="job-image">
                                                <a href="#">
                                                    <img src="assets/images/companies_logo/logo-100/logo2.jpg" alt="">
                                                </a>
                                                <span class="featured-label for-grid">featured</span>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-info-top">
                                                    <div class="title-name">
                                                        <h3 class="job-title">
                                                            <a href="#">Android & IOS Developer</a>
                                                        </h3>
                                                        <div class="employer-name">
                                                            <a href="employer-details.html">Inwave Studio</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="job-meta-two">
                                                    <div class="field-salary_from">
                                                        <i class="gj-icon gj-icon-money"></i>
                                                        $500 - $1,000 / month
                                                    </div>
                                                    <div class="field-datetime"><i class="lnr lnr-clock"></i>8 months ago</div>
                                                    <div class="field-map"><i class="lnr lnr-map-marker"></i>Hanoi, Hanoi</div>
                                                </div>
                                                <div class="field-descriptions">
                                                    <p>International collaborative, high-energy environmentCompetitive salary and great benefits, English training provided About Our Client Our…</p>
                                                </div>
                                                <div class="job-skill-tag">
                                                    <a href="#">Android</a>
                                                    <a href="#">app</a>
                                                    <a href="#">ReactJs</a>
                                                    <a href="#">Ruby</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Job End -->
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <!-- Single Job Start  -->
                                        <div class="single-job-grid-two">
                                            <div class="saveJob-grid">
                                                <a class="job-type-label" href="#">Full Time</a>
                                                <a class="save-job" href="#quick-view-modal-container" data-toggle="modal">
                                                    <i class="far fa-heart"></i>Save </a>
                                            </div>
                                            <div class="job-image">
                                                <a href="#">
                                                    <img src="assets/images/companies_logo/logo-100/logo3.jpg" alt="">
                                                </a>
                                                <span class="featured-label for-grid">featured</span>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-info-top">
                                                    <div class="title-name">
                                                        <h3 class="job-title">
                                                            <a href="#">Construction Worker</a>
                                                        </h3>
                                                        <div class="employer-name">
                                                            <a href="employer-details.html">Digital Vine</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="job-meta-two">
                                                    <div class="field-salary_from">
                                                        <i class="gj-icon gj-icon-money"></i>
                                                        $500 - $1,000 / month
                                                    </div>
                                                    <div class="field-datetime"><i class="lnr lnr-clock"></i>8 months ago</div>
                                                    <div class="field-map"><i class="lnr lnr-map-marker"></i>Hanoi, Hanoi</div>
                                                </div>
                                                <div class="field-descriptions">
                                                    <p>International collaborative, high-energy environmentCompetitive salary and great benefits, English training provided About Our Client Our…</p>
                                                </div>
                                                <div class="job-skill-tag">
                                                    <a href="#">Android</a>
                                                    <a href="#">app</a>
                                                    <a href="#">ReactJs</a>
                                                    <a href="#">Ruby</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Job End -->
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <!-- Single Job Start  -->
                                        <div class="single-job-grid-two">
                                            <div class="saveJob-grid">
                                                <a class="job-type-label" href="#">Full Time</a>
                                                <a class="save-job" href="#quick-view-modal-container" data-toggle="modal">
                                                    <i class="far fa-heart"></i>Save </a>
                                            </div>
                                            <div class="job-image">
                                                <a href="#">
                                                    <img src="assets/images/companies_logo/logo-100/logo4.jpg" alt="">
                                                </a>
                                                <span class="featured-label for-grid">featured</span>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-info-top">
                                                    <div class="title-name">
                                                        <h3 class="job-title">
                                                            <a href="#">IOS & Android Developer</a>
                                                        </h3>
                                                        <div class="employer-name">
                                                            <a href="employer-details.html">Radio Game</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="job-meta-two">
                                                    <div class="field-salary_from">
                                                        <i class="gj-icon gj-icon-money"></i>
                                                        $500 - $1,000 / month
                                                    </div>
                                                    <div class="field-datetime"><i class="lnr lnr-clock"></i>8 months ago</div>
                                                    <div class="field-map"><i class="lnr lnr-map-marker"></i>Hanoi, Hanoi</div>
                                                </div>
                                                <div class="field-descriptions">
                                                    <p>International collaborative, high-energy environmentCompetitive salary and great benefits, English training provided About Our Client Our…</p>
                                                </div>
                                                <div class="job-skill-tag">
                                                    <a href="#">Android</a>
                                                    <a href="#">app</a>
                                                    <a href="#">ReactJs</a>
                                                    <a href="#">Ruby</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Job End -->
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <!-- Single Job Start  -->
                                        <div class="single-job-grid-two">
                                            <div class="saveJob-grid">
                                                <a class="job-type-label" href="#">Full Time</a>
                                                <a class="save-job" href="#quick-view-modal-container" data-toggle="modal">
                                                    <i class="far fa-heart"></i>Save </a>
                                            </div>
                                            <div class="job-image">
                                                <a href="#">
                                                    <img src="assets/images/companies_logo/logo-100/logo5.jpg" alt="">
                                                </a>
                                                <span class="featured-label for-grid">featured</span>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-info-top">
                                                    <div class="title-name">
                                                        <h3 class="job-title">
                                                            <a href="#">Jr. Developer Shopify</a>
                                                        </h3>
                                                        <div class="employer-name">
                                                            <a href="employer-details.html">InwaveThemes</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="job-meta-two">
                                                    <div class="field-salary_from">
                                                        <i class="gj-icon gj-icon-money"></i>
                                                        $500 - $1,000 / month
                                                    </div>
                                                    <div class="field-datetime"><i class="lnr lnr-clock"></i>8 months ago</div>
                                                    <div class="field-map"><i class="lnr lnr-map-marker"></i>Hanoi, Hanoi</div>
                                                </div>
                                                <div class="field-descriptions">
                                                    <p>International collaborative, high-energy environmentCompetitive salary and great benefits, English training provided About Our Client Our…</p>
                                                </div>
                                                <div class="job-skill-tag">
                                                    <a href="#">Android</a>
                                                    <a href="#">app</a>
                                                    <a href="#">ReactJs</a>
                                                    <a href="#">Ruby</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Job End -->
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <!-- Single Job Start  -->
                                        <div class="single-job-grid-two">
                                            <div class="saveJob-grid">
                                                <a class="job-type-label" href="#">Full Time</a>
                                                <a class="save-job" href="#quick-view-modal-container" data-toggle="modal">
                                                    <i class="far fa-heart"></i>Save </a>
                                            </div>
                                            <div class="job-image">
                                                <a href="#">
                                                    <img src="assets/images/companies_logo/logo-100/logo6.jpg" alt="">
                                                </a>
                                                <span class="featured-label for-grid">featured</span>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-info-top">
                                                    <div class="title-name">
                                                        <h3 class="job-title">
                                                            <a href="#">Receptionist</a>
                                                        </h3>
                                                        <div class="employer-name">
                                                            <a href="employer-details.html">Digital Vine</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="job-meta-two">
                                                    <div class="field-salary_from">
                                                        <i class="gj-icon gj-icon-money"></i>
                                                        $500 - $1,000 / month
                                                    </div>
                                                    <div class="field-datetime"><i class="lnr lnr-clock"></i>8 months ago</div>
                                                    <div class="field-map"><i class="lnr lnr-map-marker"></i>Hanoi, Hanoi</div>
                                                </div>
                                                <div class="field-descriptions">
                                                    <p>International collaborative, high-energy environmentCompetitive salary and great benefits, English training provided About Our Client Our…</p>
                                                </div>
                                                <div class="job-skill-tag">
                                                    <a href="#">Android</a>
                                                    <a href="#">app</a>
                                                    <a href="#">ReactJs</a>
                                                    <a href="#">Ruby</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Job End -->
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <!-- Single Job Start  -->
                                        <div class="single-job-grid-two">
                                            <div class="saveJob-grid">
                                                <a class="job-type-label internship" href="#">Internship</a>
                                                <a class="save-job" href="#quick-view-modal-container" data-toggle="modal">
                                                    <i class="far fa-heart"></i>Save </a>
                                            </div>
                                            <div class="job-image">
                                                <a href="#">
                                                    <img src="assets/images/companies_logo/logo-100/logo2.jpg" alt="">
                                                </a>
                                                <span class="featured-label for-grid">featured</span>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-info-top">
                                                    <div class="title-name">
                                                        <h3 class="job-title">
                                                            <a href="#">Recreation & Fitness Worker</a>
                                                        </h3>
                                                        <div class="employer-name">
                                                            <a href="employer-details.html">Digital Asset</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="job-meta-two">
                                                    <div class="field-salary_from">
                                                        <i class="gj-icon gj-icon-money"></i>
                                                        $500 - $1,000 / month
                                                    </div>
                                                    <div class="field-datetime"><i class="lnr lnr-clock"></i>8 months ago</div>
                                                    <div class="field-map"><i class="lnr lnr-map-marker"></i>Hanoi, Hanoi</div>
                                                </div>
                                                <div class="field-descriptions">
                                                    <p>International collaborative, high-energy environmentCompetitive salary and great benefits, English training provided About Our Client Our…</p>
                                                </div>
                                                <div class="job-skill-tag">
                                                    <a href="#">Android</a>
                                                    <a href="#">app</a>
                                                    <a href="#">ReactJs</a>
                                                    <a href="#">Ruby</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Job End -->
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <!-- Single Job Start  -->
                                        <div class="single-job-grid-two">
                                            <div class="saveJob-grid">
                                                <a class="job-type-label" href="#">Full Time</a>
                                                <a class="save-job" href="#quick-view-modal-container" data-toggle="modal">
                                                    <i class="far fa-heart"></i>Save </a>
                                            </div>
                                            <div class="job-image">
                                                <a href="#">
                                                    <img src="assets/images/companies_logo/logo-100/logo5.jpg" alt="">
                                                </a>
                                                <span class="featured-label for-grid">featured</span>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-info-top">
                                                    <div class="title-name">
                                                        <h3 class="job-title">
                                                            <a href="#">Senior Data Engineer</a>
                                                        </h3>
                                                        <div class="employer-name">
                                                            <a href="employer-details.html">Radio Game</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="job-meta-two">
                                                    <div class="field-salary_from">
                                                        <i class="gj-icon gj-icon-money"></i>
                                                        $500 - $1,000 / month
                                                    </div>
                                                    <div class="field-datetime"><i class="lnr lnr-clock"></i>8 months ago</div>
                                                    <div class="field-map"><i class="lnr lnr-map-marker"></i>Hanoi, Hanoi</div>
                                                </div>
                                                <div class="field-descriptions">
                                                    <p>International collaborative, high-energy environmentCompetitive salary and great benefits, English training provided About Our Client Our…</p>
                                                </div>
                                                <div class="job-skill-tag">
                                                    <a href="#">Android</a>
                                                    <a href="#">app</a>
                                                    <a href="#">ReactJs</a>
                                                    <a href="#">Ruby</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Job End -->
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <!-- Single Job Start  -->
                                        <div class="single-job-grid-two">
                                            <div class="saveJob-grid">
                                                <a class="job-type-label remote" href="#">Remote</a>
                                                <a class="save-job" href="#quick-view-modal-container" data-toggle="modal">
                                                    <i class="far fa-heart"></i>Save </a>
                                            </div>
                                            <div class="job-image">
                                                <a href="#">
                                                    <img src="assets/images/companies_logo/logo-100/logo3.jpg" alt="">
                                                </a>
                                                <span class="featured-label for-grid">featured</span>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-info-top">
                                                    <div class="title-name">
                                                        <h3 class="job-title">
                                                            <a href="#">Senior PHP Web Developer</a>
                                                        </h3>
                                                        <div class="employer-name">
                                                            <a href="employer-details.html">InwaveThemes</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="job-meta-two">
                                                    <div class="field-salary_from">
                                                        <i class="gj-icon gj-icon-money"></i>
                                                        $500 - $1,000 / month
                                                    </div>
                                                    <div class="field-datetime"><i class="lnr lnr-clock"></i>8 months ago</div>
                                                    <div class="field-map"><i class="lnr lnr-map-marker"></i>Hanoi, Hanoi</div>
                                                </div>
                                                <div class="field-descriptions">
                                                    <p>International collaborative, high-energy environmentCompetitive salary and great benefits, English training provided About Our Client Our…</p>
                                                </div>
                                                <div class="job-skill-tag">
                                                    <a href="#">Android</a>
                                                    <a href="#">app</a>
                                                    <a href="#">ReactJs</a>
                                                    <a href="#">Ruby</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Job End -->
                                    </div>

                                    <div class="col-md-6 mb-20">
                                        <!-- Single Job Start  -->
                                        <div class="single-job-grid-two">
                                            <div class="saveJob-grid">
                                                <a class="job-type-label" href="#">Full Time</a>
                                                <a class="save-job" href="#quick-view-modal-container" data-toggle="modal">
                                                    <i class="far fa-heart"></i>Save </a>
                                            </div>
                                            <div class="job-image">
                                                <a href="#">
                                                    <img src="assets/images/companies_logo/logo-100/logo1.jpg" alt="">
                                                </a>
                                                <span class="featured-label for-grid">featured</span>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-info-top">
                                                    <div class="title-name">
                                                        <h3 class="job-title">
                                                            <a href="#">Tax Manager</a>
                                                        </h3>
                                                        <div class="employer-name">
                                                            <a href="employer-details.html">HasThemes</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="job-meta-two">
                                                    <div class="field-salary_from">
                                                        <i class="gj-icon gj-icon-money"></i>
                                                        $500 - $1,000 / month
                                                    </div>
                                                    <div class="field-datetime"><i class="lnr lnr-clock"></i>8 months ago</div>
                                                    <div class="field-map"><i class="lnr lnr-map-marker"></i>Hanoi, Hanoi</div>
                                                </div>
                                                <div class="field-descriptions">
                                                    <p>International collaborative, high-energy environmentCompetitive salary and great benefits, English training provided About Our Client Our…</p>
                                                </div>
                                                <div class="job-skill-tag">
                                                    <a href="#">Android</a>
                                                    <a href="#">app</a>
                                                    <a href="#">ReactJs</a>
                                                    <a href="#">Ruby</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Job End -->
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="page-pagination">
                                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- Job Listing Section End -->


@endsection