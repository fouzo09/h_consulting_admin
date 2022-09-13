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
                                <li>Liste des formations</li>
                            </ul>
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
                    @foreach($formations as $formation)
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('assets/img/formation/'. $formation->image) }}" style="max-height: 200px;" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $formation->titre }}</h5>
                                    <p class="card-text">
                                        {{ str_limit($formation->contenu, 100) }}
                                    </p>
                                    <a href="{{ url('formation', $formation->id) }}">Voir plus</a>
                                </div>
                            </div>
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Job Listing Section End -->

@endsection
