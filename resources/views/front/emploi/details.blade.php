@extends('layouts.tpl_front')
@section('content')
<!-- Page Banner Section Start -->
<div class="page-banner-section section bg_color--5 pt-120 pt-lg-100 pt-md-80 pt-sm-60 pt-xs-50">
    <div class="container p-0">
        <div class="row g-0">
            <div class="col-12">
                <div class="banner-image">
                    <img src="assets/img/offres-emplois/{{$emploi->image}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Section End -->

<!-- Breadcrumb Section Start -->
<div class="breadcrumb-section section bg_color--5">
    <div class="container job-content-box">
        <div class="row">
            <div class="col-12">
                <div class="page-breadcrumb-content">
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="job-listing.html">Jobs Listing</a></li>
                        <li>Tax Manager</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="job-head-content">
                    <h1 class="title">Tax Manager</h1>
                    <p class="employer-name">Vsmarttech</p>
                    <div class="job-meta-detail">
                        <ul>
                            <li class="posted">
                                <i class="lnr lnr-clock"></i>
                                <span class="text">Posted date: </span>
                                <span class="time">{{$emploi->date_publication}}</span>
                            </li>
                            <li class="expries">
                                <i class="lnr lnr-hourglass"></i>
                                <span class="text">Expries in: </span>
                                <span class="date theme-color"> {{$emploi->date_publication}} </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-sm-60 mt-xs-50">
                <div class="sidebar-wrapper-three">
                    <div class="common-sidebar-widget sidebar-three mb-0 pb-0">
                        <div class="sidebar-job-apply">
                            <div class="action-button">
                                <a class="ht-btn text-center" href="#">Apply now <i class="ml-10 mr-0 fa fa-paper-plane"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="common-sidebar-widget sidebar-three">
                        <div class="sidebar-job-share">
                            <div class="job-share">
                                <ul>
                                    <li><a href="#"><i class="lnr lnr-heart"></i> <span class="text">Save </span></a></li>
                                    <li><a href="#"><i class="lnr lnr-bubble"></i> <span class="text">Share </span></a>
                                        <ul class="social-share">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="lnr lnr-warning"></i> <span class="text">Report </span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Start -->
      <!-- Job Details Section Start -->
      <div class="job-details-section section bg_color--5 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
        <div class="container job-content-box st-border">
            <div class="row">

                <div class="col-lg-4 order-lg-2 order-2 mt-sm-60 mt-xs-50">
                    <div class="sidebar-wrapper-three">
                        <div class="common-sidebar-widget sidebar-three">
                            <h2 class="sidebar-title">Job Information</h2>
                            <div class="sidebar-meta">
                                <div class="row g-0">

                                    <div class="col-lg-12">
                                        <!-- Single Meta Field Start -->
                                        <div class="single-meta-field">
                                            <div class="field-label">
                                                <i class="lnr lnr-map-marker"></i>
                                                <span>Work Location: </span>
                                            </div>
                                            <div class="field-value">
                                                @foreach(json_decode($emploi->ville_id) as $item)
                                                    <span> {{\App\Models\Ville::find($item)->nom}}</span>
                                                @endforeach

                                            </div>
                                        </div>
                                        <!-- Single Meta Field Start -->
                                    </div>

                                    <div class="col-lg-12">
                                        <!-- Single Meta Field Start -->
                                        <div class="single-meta-field">
                                            <div class="field-label">
                                                <i class="lnr lnr-briefcase"></i>
                                                <span>Type </span>
                                            </div>
                                            <div class="field-value"><a class="fw-600" href="#">{{\App\Models\Type::find($emploi->type_id)->nom}}</a></div>
                                        </div>
                                        <!-- Single Meta Field Start -->
                                    </div>

                                    <div class="col-lg-12">
                                        <!-- Single Meta Field Start -->
                                        <div class="single-meta-field">
                                            <div class="field-label">
                                                <i class="lnr lnr-tag"></i>
                                                <span>Domaines </span>
                                            </div>
                                            <div class="field-value">
                                                    @foreach (json_decode($emploi->domaine_id) as $item)
                                                        <span>{{\App\Models\Domaine::find($item)->nom}}</span>
                                                    @endforeach
                                            </div>
                                        </div>
                                        <!-- Single Meta Field Start -->
                                    </div>

                                    <div class="col-lg-12">
                                        <!-- Single Meta Field Start -->
                                        <div class="single-meta-field">
                                            <div class="field-label">
                                                <i class="lnr lnr-graduation-hat"></i>
                                                <span>Experience </span>
                                            </div>
                                            <div class="field-value"><a href="#">> {{$emploi->experience}} years</a></div>
                                        </div>
                                        <!-- Single Meta Field Start -->
                                    </div>

                                    <div class="col-lg-12">
                                        <!-- Single Meta Field Start -->
                                        <div class="single-meta-field">
                                            <div class="field-label">
                                                <i class="lnr lnr-layers"></i>
                                                <span>Skills </span>
                                            </div>
                                            <div class="field-value">
                                                <div class="job-skill-tag">
                                                    <a href="#">CSS</a>
                                                    <a href="#">PHP</a>
                                                    <a href="#">WordPress</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Meta Field Start -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 order-lg-1 order-1 pr-55 pr-md-15 pr-sm-15 pr-xs-15">

                    <div class="job-detail-content">
                        <div class="field-descriptions mt-xs-20 mb-60 mb-sm-30 mb-xs-30">
                            <p>{{$emploi->contenu}}</p>
                        </div>
                        <div class="job-apply">
                            <a class="ht-btn text-center" href="#">Apply now <i class="ml-10 mr-0 fa fa-paper-plane"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Job Details Section End -->

    <!-- Job Grid Section Start -->
    <div class="job-grid-section section pt-120 pt-lg-100 pt-md-80 pt-sm-60 pt-xs-50 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-four mb-40">
                        <h3>Related Jobs</h3>
                    </div>
                </div>
            </div>
            <div class="job-grid-slider">
                @foreach ($relatedJobs as $emploi)
                    <div class="col-md-4">
                        <!-- Single Job Start  -->
                        <div class="single-job-grid-two">
                            <div class="saveJob-grid">
                                <a class="job-type-label remote" href="#">{{\App\Models\Type::find($emploi->type_id)->nom}}</a>
                                <button class="save-job" href="#quick-view-modal-container" data-toggle="modal">
                                    <i class="far fa-heart"></i>Save </button>
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
                                            <a href="#">{{$emploi->titre}}</a>
                                        </h3>
                                        <p>{{\App\Models\Entreprise::find($emploi->entreprise_id)->raison_sociale}}</p>
                                    </div>
                                </div>
                                <div class="job-meta-two">
                                    <div class="field-datetime"><i class="lnr lnr-clock"></i>{{$emploi->date_publication}}</div>
                                    <div class="field-map"><i class="lnr lnr-map-marker"></i>
                                        @foreach(json_decode($emploi->ville_id) as $item)
                                        <span> {{\App\Models\Ville::find($item)->nom}}</span>
                                    @endforeach
                                    </div>
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
                @endforeach
            </div>
        </div>
    </div>
    <!-- Job Grid Section End -->

@endsection
