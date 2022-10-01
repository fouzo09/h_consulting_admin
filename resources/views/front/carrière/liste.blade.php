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
                                <li>Liste des carrières</li>
                            </ul>
                            <h1>Liste des carrières</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section Start -->

        <div class="row">
            @if($carrieres)
                @foreach($carrieres as $carriere)
                <div class="col-lg-12 mb-20">
                    <!-- Single Job Start  -->
                    <div class="single-job style-two">
                        <div class="info-top">
                            <div class="job-image">
                                    <img src="{{ asset('assets/img/service/'. $carriere->image) }}" alt="logo">
                            </div>
                            <div class="job-info">
                                <div class="job-info-inner">
                                    <div class="job-info-top">
                                        <div class="saveJob for-listing">
                                            <a  class="job-type-label ml-20 mr-20"></a>
                                            <a class="save-job" href="#quick-view-modal-container" data-toggle="modal">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="title-name">
                                            <h3 class="job-title">
                                                {{ $carriere->libelle }}
                                            </h3>
                                            <div class="employer-name">
                                                <a href="#">{{ $carriere->description }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Job End -->
                </div>
                @endforeach
            @endif
        </div>





@endsection
