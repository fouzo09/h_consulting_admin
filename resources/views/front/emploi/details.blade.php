@extends('layouts.tpl_front')
@section('content')
    @include("layouts.header_page")
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section bg_color--5 pt-120 pt-lg-100 pt-md-80 pt-sm-60 pt-xs-50">
        <div class="container p-0">
            <div class="row g-0">
                <div class="col-12">
                    <div class="banner-image">
                        <img width="1200px" height="460px;" src="{{ asset('assets/img/offres-emplois/'. $emploi->image) }}" alt="">
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
                <div class="col-lg-8">
                    <div class="job-head-content">
                        <h1 class="title">{{ $emploi->titre }}</h1>
                        <p class="employer-name">{{ $emploi->entreprise->raison_sociale }}</p>
                        <div class="job-meta-detail">
                            <ul>
                                <li class="posted">
                                    <i class="lnr lnr-clock"></i>
                                    <span class="text">Date de publication : </span>
                                    <span class="time">{{$emploi->date_publication}}</span>
                                </li>
                                <li class="expries">
                                    <i class="lnr lnr-hourglass"></i>
                                    <span class="text">Valide jusqu'au : </span>
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
                                    <a class="ht-btn text-center" href="#" data-bs-toggle="modal" data-bs-target="#PosterOffre">
                                        Postuler
                                        <i class="ml-10 mr-0 fa fa-paper-plane"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="common-sidebar-widget sidebar-three">
                            <div class="sidebar-job-share">
                                <div class="job-share">
                                    <ul>
                                        <li><a href="#"><i class="lnr lnr-heart"></i> <span class="text">Enregistrer </span></a></li>
                                        <li><a href="#"><i class="lnr lnr-bubble"></i> <span class="text">Partager </span></a>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="far fa-envelope"></i></a></li>
                                            </ul>
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
    <!-- Breadcrumb Section Start -->
    <!-- Job Details Section Start -->
    <div class="job-details-section section bg_color--5 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
        <div class="container job-content-box st-border">
            <div class="row">

                <div class="col-lg-4 order-lg-2 order-2 mt-sm-60 mt-xs-50">
                    <div class="sidebar-wrapper-three">
                        <div class="common-sidebar-widget sidebar-three">
                            <h2 class="sidebar-title">Informations de l'offre</h2>
                            <div class="sidebar-meta">
                                <div class="row g-0">

                                    <div class="col-lg-12">
                                        <!-- Single Meta Field Start -->
                                        <div class="single-meta-field">
                                            <div class="field-label">
                                                <i class="lnr lnr-map-marker"></i>
                                                <span>Villes : </span>
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
                                                <span>Type : </span>
                                            </div>
                                            <div class="field-value">
                                                <a class="fw-600" href="#">
                                                    {{\App\Models\Type::find($emploi->type_id)->nom}}
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Single Meta Field Start -->
                                    </div>

                                    <div class="col-lg-12">
                                        <!-- Single Meta Field Start -->
                                        <div class="single-meta-field">
                                            <div class="field-label">
                                                <i class="lnr lnr-tag"></i>
                                                <span>Domaines : </span>
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
                                                <span>Experience : </span>
                                            </div>
                                            <div class="field-value">
                                                <a href="#">
                                                    @if($emploi->experience > 1)
                                                        {{ $emploi->experience }} years
                                                    @else
                                                        {{ $emploi->experience }} year
                                                    @endif

                                                </a>
                                            </div>
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
                            <a class="ht-btn text-center" href="#" data-bs-toggle="modal" data-bs-target="#PosterOffre">
                                Postuler
                                <i class="ml-10 mr-0 fa fa-paper-plane"></i>
                            </a>
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
                        <h3>D'autres offre d'emplois</h3>
                    </div>
                </div>
            </div>
            <div class="job-grid-slider">
                @foreach ($relatedJobs as $item)
                    <div class="col-md-2 mb-20">
                        <!-- Single Job Start  -->
                        <div class="single-job-grid-two">

                            <div class="job-image">
                                <a href="{{ route('details-offres-emplois',$item) }}">
                                    <img style="max-width: 100px" src="{{ asset('assets/img/offres-emplois/'. $item->image) }}" alt="logo">
                                </a>
                                <span class="featured-label for-grid">{{ \App\Models\Type::find($emploi->type_id)->nom }}</span>
                            </div>
                            <div class="job-info">
                                <div class="job-info-top">
                                    <div class="title-name">
                                        <h3 class="job-title">
                                            <a href="{{ route('details-offres-emplois',$item) }}">{{ $item->titre }}</a>
                                        </h3>
                                        <div class="employer-name">
                                            <a href="employer-details.html">{{ $item->entreprise->raison_sociale }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-meta-two">
                                    <div class="field-datetime"><i class="lnr lnr-clock"></i>{{ "Posté il y'a environ ".\App\Models\Emploi::nombreDejourDuPoste($item->date_publication) }}</div>
                                    <div class="field-map"><i class="lnr lnr-map-marker"></i>{{ \App\Models\Emploi::getVilles($item->id) }}</div>
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

@if(auth()->check())
    {{-- mon modal pour postuler --}}
        <div class="modal fade" id="PosterOffre">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title" aria-labelledby="Postuler à un poste" >

                            <span>Postuler à cette offre</span>

                            <span>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </span>

                        </h4>

                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="{{ Route('Envois-CV-Postulant',['emploi_Id'=>$emploi->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-body" aria-describedby="content">
                            <label for="cv">Sélectionner votre CV Svp!</label>
                            <input type="file" name="cv" id="cv" class="form-control">
                        </div>

                        <div class="modal-footer">
                            <button type="submit"  class='btn btn-primary'>
                                <i class="ml-10 mr-0 fa fa-paper-plane"></i>
                                Envoyer
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
@else
        {!! redirect('Connexion-Inscription-User') !!}
@endif
    {{-- fin de la modal --}}

@endsection
