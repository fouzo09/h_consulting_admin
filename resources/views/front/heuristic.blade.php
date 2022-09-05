@extends('layouts.tpl_front')
@section('content')
        @include("layouts.header_page")


        <!-- About Content Section Start -->
        <div id="who" class="about-content-section section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 style="color:#0A2254; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Heuristic Consulting</h2>
                        <br>
                        <div class="about-content">
                            <p style="font-size: 18px;font-weight:bold ;text-align:justify; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                Créé en 2012, Heuristic Consulting est un cabinet specialisé dans le Conseil en
                                Ressources Humaines, le Recrutement, la formation et le Coaching. Il se fixe
                                pour mission d’accompagner ses clients dans la définition de leurs besoins et
                                leur apporter les solutions adaptées et créatrices de valeur ajoutée.
                            </p>
                            <br>
                            <p style="text-align:justify">
                                Avec le temps et les expériences enrichissantes accumulées, le cabinet souhaite se donner un
                                positionnement stratégique sur le marché guinéen et ouest-africain en particulier, et de manière
                                générale sur le marché africain, en devenant un partenaire d’affaire privilégié des entreprises et
                                institutions dans les domaines du management du capital humain, de la stratégie
                                organisationnelle et de la communication.
                            </p>
                            <p style="text-align:justify">
                                Pour y parvenir, le cabinet Global Vision Guinée Sarl veut se doter d’une nouvelle image en
                                devenant Heuristic Consulting ou Heuristic Flow. Heuristic, traduit du français heuristique vient
                                du grec heuriskein, qui signifie trouver. C’est donc une méthode de recherche, de découverte
                                ou de résolution de problèmes organisationnels.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/front/images/about.png') }}" alt="">
                    </div>
                </div>
            </div>
            <br>
            <br>
            {{-- Domaine d'intervention --}}

            <div class="container">
                <h2 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Domaines d'intervention</h2>
                <br><br>
                <div class="row g-0 border-top-left">
                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                        <!-- Single Personal Skill Start -->
                        <div class="single-personal-skill">
                            <div class="skill-icon">
                                <img src="assets/images/icons/conseil_hr.png" alt="">
                            </div>
                            <div class="personal-skill-content">
                                <h4 class="title" style="color:#0A2254; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Conseil RH </h4>
                                <p>
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
            <!-- Services Content Section End -->
            <hr>
        </div>
        <!-- About Content Section End -->


@endsection
