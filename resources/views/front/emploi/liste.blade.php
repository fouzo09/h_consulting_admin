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
                                <li><a href="{{ url('/') }}">Accueil</a></li>
                                <li>Liste des offres emplois</li>
                            </ul>
                            <h1>Liste des offres emplois</h1>
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
                                <h2 class="sidebar-title">Chercher une offre </h2>
                                <div class="sidebar-search-form-two">
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" name="search" placeholder="Search...">
                                            <i class="lnr lnr-magnifier"></i>
                                        </div>
                                        <button type="submit" class="ht-btn theme-btn theme-btn-two w-100">Rechercher</button>
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
                            
                        </div>
                    </div>

                    <div class="col-lg-8 order-lg-2 order-1">
                        
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
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Job Listing Section End -->


@endsection