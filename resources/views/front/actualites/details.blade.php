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
                                <li><a href="{{ url('actualites') }}">Actualité</a></li>
                                <li>Details formation</li>
                            </ul>
                            <h1>{{ $actualite->titre }}</h1>
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
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <p>
                                    {{ $actualite->contenu }}
                                </p>
                                
                                <p>
                                    <strong>Date de publication </strong>: {{ $actualite->date_publication }}
                                </p>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <!-- Job Listing Section End -->


@endsection
