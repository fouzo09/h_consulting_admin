@extends('layouts.tpl_front')
@section('content')
        @include("layouts.header_page")

            <div class="dashboard-main-inner">
                <div class="row">
                    <div class="col-12">
                        <div class="page-breadcrumb-content mb-40">
                            <h1>Profile</h1>
                        </div>
                    </div>
                </div>
                <div class="dashboard-overview">
                    <div class="row">
                        <div class="col-xl-12 col-12">
                            <div class="profile-applications mb-50">
                                <div class="profile-applications-heading">
                                    <ul class="nav">
                                        <li>
                                            Mon profile
                                            <span>
                                                <!-- verification de la valider des informations -->
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                <!-- fin de la verification des informations -->
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="profile-applications-main-block">
                                    <div class="profile-applications-form">
                                        <form action="{{ Route('monProfile') }}" method="post">
                                            <div class="row mb-30">
                                                @csrf
                                                <div class="col-lg-12">
                                                    <div class="row">

                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                                            <!-- Single Input Start -->
                                                            <div class="single-input mb-25">
                                                                <label for="first-name">Prénom: <span>*</span></label>
                                                                <input type="text" id="first-name" name="firstName" placeholder="Entrer votre Prénom" value="{{ $user->firstName }}">
                                                            </div>
                                                            <!-- Single Input End -->
                                                        </div>

                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                                            <!-- Single Input Start -->
                                                            <div class="single-input mb-25">
                                                                <label for="last-name">Nom: <span>*</span></label>
                                                                <input type="text" id="last-name" name="lastName" placeholder="Entrer votre Nom" value="{{ $user->lastName }}">
                                                            </div>
                                                            <!-- Single Input End -->
                                                        </div>

                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                                            <!-- Single Input Start -->
                                                            <div class="single-input mb-25">
                                                                <label for="email">Email <span>*</span></label>
                                                                <input type="email" id="email" name="email" placeholder="Entrer votre Email" value="{{ $user->email }}">
                                                            </div>
                                                            <!-- Single Input End -->
                                                        </div>

                                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                                            <!-- Single Input Start -->
                                                            <div class="single-input mb-25">
                                                                <label for="phone">Numero de Téléphone <span>*</span></label>
                                                                <input type="text" id="url" name="phone" placeholder="Entrer votre Numero de Téléphone" value="{{ $user->phone }}">
                                                            </div>
                                                            <!-- Single Input End -->
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="profile-action-btn d-flex flex-wrap align-content-center justify-content-between">
                                                        <button class="ht-btn theme-btn theme-btn-two mb-xs-20">
                                                            <i class="fas fa-edit"></i>
                                                            Mettre à jour le Profile
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="page-breadcrumb-content mb-40">
                            <h1>Candidature</h1>
                        </div>
                    </div>
                </div>
                <div class="dashboard-overview">

                    <div class="submited-applications mb-50">
                        <div class="applications-heading">
                            <h3>Les differentes applications</h3>
                        </div>
                        <div class="applications-main-block">
                            <div class="applications-table">
                                @if($postulant->count() > 0)
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="width-35">Titre de l'emploi</th>
                                                <th class="width-35">Contenu de l'emploi</th>
                                                <th class="width-12">Date de la postulation</th>
                                                <th class="width-15">Curruculum vitae (C.V)</th>
                                                <th class="width-15">Lettre de motivation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {{-- Affichage de la liste des candidats --}}
                                        @foreach ($postulant as $item)
                                                <tr class="application-item">
                                                    <td class="application-job">
                                                        <h6>{{ $item->titre }}</h6>
                                                    </td>

                                                    <td class="application-employer">
                                                        {{ $item->contenu }}
                                                    </td>

                                                    <td class="application-created">
                                                        {{ $item->date_de_la_postulation }}
                                                    </td>

                                                    <td class="view-application text-xl-right">
                                                        <a href="{{ asset('storage/'.$item->CV) }}"
                                                            class="view-application" target="_blank">
                                                            Telecharger le CV
                                                        </a>
                                                    </td>

                                                    <td class="view-application text-xl-right">
                                                        <a href="{{ asset('storage/'.$item->lettre_moti) }}"
                                                            class="view-application" target="_blank">
                                                            Telecharger la lettre
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            {{-- fin de la liste des candidats --}}
                                        </tbody>
                                    </table>
                                @else
                                    <span style="margin-left:25%"> Il n'ya pas d'enregistrement vous concernant</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
