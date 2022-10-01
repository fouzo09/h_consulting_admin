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
                                <li>Liste des actualités</li>
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
                    @foreach($actualites as $actualite)
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('assets/img/actualite/'. $actualite->image) }}" style="max-height: 200px;" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $actualite->titre }}</h5>
                                    <p class="card-text">
                                        <?php $contenu = str_limit($actualite->contenu, 200) ?>
                                        {!! html_entity_decode($contenu) !!}
                                    </p>
                                    <a href="{{ url('actualite', $actualite->id) }}">Voir plus</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Job Listing Section End -->


@endsection
