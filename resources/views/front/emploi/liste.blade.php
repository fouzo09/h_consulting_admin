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
                                            <label for="experience-cbx">> 5 years </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="experience-cbx-two">
                                            <label for="experience-cbx-two"> 3-5 years</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="experience-cbx-two">
                                            <label for="experience-cbx-two"> &lt; 1-3 years</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="experience-cbx-two">
                                            <label for="experience-cbx-two"> 1-2 year</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="experience-cbx-two">
                                            <label for="experience-cbx-two"> &lt; 1 year</label>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">Niveaux de formation</h2>
                                <ul class="sidebar-cbx-list">
                                    @foreach ($grades as $grade)
                                        <li>
                                            <div class="filter-name-item">
                                                <input type="checkbox" name="{{$grade->id}}" id="{{$grade->nom}}-cbx">
                                                <label for="{{$grade->nom}}-cbx">{{$grade->nom}}</label>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">Domaines</h2>
                                <ul class="sidebar-cbx-list">
                                    @foreach ($domaines as $domaine)
                                        <li>
                                            <div class="filter-name-item">
                                                <input type="checkbox" name="{{$domaine->id}}" id="{{$domaine->nom}}-cbx">
                                                <label for="{{$domaine->nom}}-cbx">{{$domaine->nom}}</label>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">Secteurs</h2>
                                <ul class="sidebar-cbx-list">
                                    @foreach ($secteurs as $secteur)
                                        <li>
                                            <div class="filter-name-item">
                                                <input type="checkbox" name="{{$secteur->id}}" id="{{$secteur->nom}}-cbx">
                                                <label for="{{$secteur->nom}}-cbx">{{$secteur->nom}}</label>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">Villes</h2>
                                <ul class="sidebar-cbx-list">
                                    @foreach ($villes as $ville)
                                        <li>
                                            <div class="filter-name-item">
                                                <input type="checkbox" name="{{$ville->id}}" id="{{$ville->nom}}-cbx">
                                                <label for="{{$ville->nom}}-cbx">{{$ville->nom}}</label>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">Type</h2>
                                <ul class="sidebar-cbx-list">
                                    @foreach ($types as $type)
                                        <li>
                                            <div class="filter-name-item">
                                                <input type="checkbox" name="{{$type->id}}" id="{{$type->nom}}-cbx">
                                                <label for="{{$type->nom}}-cbx">{{$type->nom}}</label>
                                            </div>
                                        </li>
                                    @endforeach
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
                                                        <a href="{{ route('details-offres-emplois',$item) }}">
                                                            <img src="{{ asset('assets/img/offres-emplois/'. $item->image) }}" alt="logo">
                                                        </a>
                                                    </div>
                                                    <div class="job-info">
                                                        <div class="job-info-inner">
                                                            <div class="job-info-top">
                                                                <div class="saveJob for-listing">
                                                                    <!-- <span class="featured-label">featured</span> -->
                                                                    <a  class="job-type-label ml-20 mr-20"></a>
                                                                    <a class="save-job" href="#quick-view-modal-container" data-toggle="modal">
                                                                        <i class="far fa-heart"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="title-name">
                                                                    <h3 class="job-title">
                                                                        <a href="{{ route('details-offres-emplois',$item) }}">{{ $item->titre }}</a>
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
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Job Listing Section End -->


@endsection
