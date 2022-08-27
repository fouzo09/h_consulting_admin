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
                                <li>
                                    <a href="{{ Route('/') }}">Accueil</a>
                                </li>
                                <li>Connecter & Inscrire</li>
                            </ul>
                            <h1>Connecter & Inscrire</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section Start -->

        <!-- Login Register Section Start -->
        <div class="login-register-section section bg_color--5 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row g-0">

                    <div class="col-lg-4">
                        <div class="login-register-form-area">
                            <div class="login-tab-menu">
                                <ul class="nav">
                                    <li>
                                        <a class="active show" data-bs-toggle="tab" href="#Connexion">
                                            Connecter
                                        </a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tab" href="#Inscription">
                                            Inscrire
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            {{-- Connexion utilisateur. --}}
                            <div class="tab-content">
                                <div id="Connexion" class="tab-pane fade show active">
                                    <div class="login-register-form">
                                        <form action="{{ Route('Authentification-front') }}" method="post">
                                            @csrf
                                            <p>
                                                Connectez-vous avec votre compte inscrit sur le site

                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                            </p>
                                            <div class="row">

                                                <div class="col-12">
                                                    <div class="single-input">
                                                        <input type="text" placeholder="Email" name="email" class="form form-control">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="single-input">
                                                        <input type="password" placeholder="Mot de passe" name="password" class="form form-control">
                                                    </div>
                                                </div>

                                                <div class="col-12 mb-25"><button class="ht-btn">Connectez</button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                {{-- fin de la partie connection d'utilisateur --}}

                                {{-- Inscription des utilisateurs --}}
                                <div id="Inscription" class="tab-pane fade">
                                    <div class="login-register-form">
                                        <form action="{{ Route('inscriptionUser') }}" method="post">
                                            @csrf
                                            <p>
                                                Créer votre compte
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </p>
                                            <div class="row row-5">
                                                <div class="col-12">
                                                    <div class="single-input">
                                                        <input type="text" placeholder="Prénom" name="firsname" class="form form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="single-input">
                                                        <input type="text" placeholder="Nom" name="lastname" class="form form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="single-input">
                                                        <input type="tel" placeholder="Numéro de téléphone" name="phone" class="form form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="single-input">
                                                        <input type="email" placeholder="Adresse email" name="email" class="form form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="single-input">
                                                        <input type="password" placeholder="Mot de passe" name="password" class="form form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="single-input">
                                                        <input type="password" placeholder="Confirmer Mot de passe" name="conPassword" class="form form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-25"><button class="ht-btn">Inscrire</button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- fin inscription des utilisateus --}}
                    <div class="col-lg-8">
                        <div class="login-instruction">
                            <div class="login-instruction-content">
                                <h3 class="title">Pourquoi se connecter à nous</h3>
                                <p>Il est important que vous ayez un compte et que vous vous connectiez afin d'avoir un accès complet à HConsulting. Nous avons besoin de connaître les détails de votre compte afin de permettre de travailler ensemble</p>
                                <ul class="list-reasons">
                                    <li class="reason">Soyez alerté des dernières offres d'emploi</li>
                                    <li class="reason">Postulez à des offres d'emploi en un seul clic</li>
                                    <li class="reason">Présentez votre CV à des milliers d'employeurs</li>
                                    <li class="reason">Gardez une trace de toutes vos candidatures</li>
                                </ul>
                                <span class="sale-text theme-color border-color">Connectez-vous aujourd'hui &amp; Obtenez un coupon de réduction de 15 % pour le premier achat de planification</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Login Register Section End -->


@endsection
