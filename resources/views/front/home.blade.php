@extends('layouts.tpl_front')
@section('content')
        @include("layouts.header_home")

          <!-- About Content Section Start -->
          <div class="about-content-section section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 style="color:#0A2254; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Heuristic Consulting</h2>
                        <br><br>
                        <div class="about-content">
                            <p style="font-size: 22px; text-align:justify; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                Créé en 2012, Heuristic Consulting est un cabinet specialisé dans le Conseil en
                                Ressources Humaines, le Recrutement, la formation et le Coaching. Il se fixe
                                pour mission d’accompagner ses clients dans la définition de leurs besoins et
                                leur apporter les solutions adaptées et créatrices de valeur ajoutée.
                                <span>
                                    <a href="{{ Route('heuristic') }}"> Lire la suite</a>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/front/images/about.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- About Content Section End -->

          <!-- Services Content Section Start -->
          <div class="personal-skill-section section bg-image-proparty bg_image--2 pt-120 pt-lg-100 pt-md-80 pt-sm-60 pt-xs-50 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
            <div class="container">
                <h2 style="color:#0A2254;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Offres d'emplois</h2>
                <br>
                <div class="row">
                    @foreach($offres as $item)
                        <div class="col-md-3 mb-20">
                            <!-- Single Job Start  -->
                            <div class="single-job-grid-two">

                                <div class="job-image">
                                    <a href="{{ route('details-offres-emplois',$item) }}">
                                        <img src="{{ asset('assets/img/offres-emplois/'. $item->image) }}" alt="logo">
                                    </a>
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
            <hr>
        </div>
        <!-- Services Content Section End -->

        <!-- Services Content Section Start -->
        <div class="personal-skill-section section bg-image-proparty bg_image--2 pt-120 pt-lg-100 pt-md-80 pt-sm-60 pt-xs-50 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
            <div class="container">
                <h2 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Domaines d'intervention</h2>
                <div class="row g-0 border-top-left">
                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                        <!-- Single Personal Skill Start -->
                        <div class="single-personal-skill">
                            <div class="skill-icon">
                                <img src="assets/images/icons/conseil_hr.png" alt="">
                            </div>
                            <div class="personal-skill-content">
                                <h4 class="title" style="color:#0A2254; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Conseil RH </h4>
                                <p style="text-align:justify;">
                                    Nous offrons une prestation sur mesure de Conseil en Ressources Humaines. Besoin d’un conseil RH adapté à votre entreprise ? Contactez le professionnel en la matière.
                                </p>
                            </div>
                        </div>
                        <!-- Single Personal Skill End -->
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                        <!-- Single Personal Skill Start -->
                        <div class="single-personal-skill">
                            <div class="skill-icon">
                                <img src="assets/images/icons/recruitment.png" alt="">
                            </div>
                            <div class="personal-skill-content">
                                <h4 class="title" style="color:#0A2254;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Recrutement</h4>
                                <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                    Vous recherchez un collaborateur, une collaboratrice, des talents pour votre besoin ?
                                    Contactez nous pour vous accompagner dans vos demarches de recrutement.
                                </p>
                            </div>
                        </div>
                        <!-- Single Personal Skill End -->
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                        <!-- Single Personal Skill Start -->
                        <div class="single-personal-skill">
                            <div class="skill-icon">
                                <img src="assets/images/icons/formation.png" alt="">
                            </div>
                            <div class="personal-skill-content">
                                <h4 class="title" style="color:#0A2254;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Formation</h4>
                                <p>
                                    Consultez notre catalogue de formations de RH, Management, Informatique, Finance, Comptabilité et Audit.
                                    Besoin d’un programme personnalisé et adapté à vos besoins et disponibilités ? Contactez-nous. (lien formulaire de contact).
                                </p>
                            </div>
                        </div>
                        <!-- Single Personal Skill End -->
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                        <!-- Single Personal Skill Start -->
                        <div class="single-personal-skill">
                            <div class="skill-icon">
                                <img src="assets/images/icons/coaching.png" alt="">
                            </div>
                            <div class="personal-skill-content">
                                <h4 class="title" style="color:#0A2254;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Coaching</h4>
                                <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                    Vous souhaitez Accroître vos compétences et réfléchir sur les pratiques professionnelles ?
                                    Contactez nous pour un bilan de compétences et des séances de coaching adaptés.
                                </p>
                            </div>
                        </div>
                        <!-- Single Personal Skill End -->
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                        <!-- Single Personal Skill Start -->
                        <div class="single-personal-skill">
                            <div class="skill-icon">
                                <img src="assets/images/icons/interim.png" alt="">
                            </div>
                            <div class="personal-skill-content">
                                <h4 class="title" style="color:#0A2254; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Intérim</h4>
                                <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                    Vous souhaitez voir du personnel intérimaire pour les emplois ponctuels ?
                                    Contactez nous pour bénéficier de notre vivier de talents.
                                </p>
                            </div>
                        </div>
                        <!-- Single Personal Skill End -->
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                        <!-- Single Personal Skill Start -->
                        <div class="single-personal-skill">
                            <div class="skill-icon">
                                <img src="assets/images/icons/project-management.png" alt="">
                            </div>
                            <div class="personal-skill-content">
                                <h4 class="title" style="color:#0A2254; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Management de projets</h4>
                                <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                 Nous disposons d’un vivier de consultants pointus dans différents prêts à vous accompagner dans le management de vos projets.
                                </p>
                            </div>
                        </div>
                        <!-- Single Personal Skill End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Content Section End -->

