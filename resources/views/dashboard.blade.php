@extends('layouts.tpl')


@section('content')
{{-- Debut du Tableau de bord --}}
<main>

    <div class="card">
        <div class="container-fluid px-4">
          <div class="card-header">
            <h1 class="mt-4">Tableau de Bord</h1>
          </div>
          <div class="card-body">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                            Offre d'emploi
                            <span style="margin-left: 50%; font-size:20px">
                                {{ $emplois }}
                            </span>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ url('admin/list-offres-emplois') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">
                            Actualités
                            <span style="margin-left: 65%; font-size:20px">
                                {{ $actualites }}
                            </span>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ url('admin/list-actualites') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            Services
                            <span style="margin-left: 63%; font-size:20px">
                                {{ $services }}
                            </span>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ url('admin/list-services') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">
                            Configuration
                            <span style="margin-left: 54%; font-size:20px">
                                {{ $configs }}
                            </span>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ url('admin/config') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                            Entreprises
                            <span style="margin-left: 57%; font-size:20px">
                                {{ $entreprises }}
                            </span>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ url('admin/list-entreprises') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">
                            Formations
                            <span style="margin-left: 57%; font-size:20px">
                                {{ $formations }}
                            </span>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ url('admin/list-formations') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            Type de Contrat
                            <span style="margin-left: 45%; font-size:20px">
                                {{ $types }}
                            </span>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ Route('listeTypeContrat') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">
                            Utilisateurs
                            <span style="margin-left: 57%; font-size:20px">
                                {{ $users }}
                            </span>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ url('admin/list-users') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                            Domaines
                            <span style="margin-left: 60%; font-size:20px">
                                {{ $domaines }}
                            </span>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ Route('listeDomaine') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">
                            Secteurs
                            <span style="margin-left: 63%; font-size:20px">
                                {{ $secteurs }}
                            </span>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ Route('listeSecteur') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>

    {{-- La partie qui concerne la liste des candidatures --}}
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Liste des candidatures
                </div>
                <div class="card-body">
                    @if ($candidats->count() > 0)
                        <table class="table table-striped table-bordered table-condensed table-responsiveKs">
                            <thead>
                                    <th>Titre de l'emploi</th>
                                    <th>Contenu de l'emploi</th>
                                    <th>Date de la postulation</th>
                                    <th>C.V du Postulant</th>
                            </thead>

                            <tbody>
                                @foreach ($candidats as $candidat)
                                <tr>
                                    <td>{{ $candidat->titre }}</td>
                                    <td>{{ $candidat->contenu }}</td>
                                    <td>{{ $candidat->date_de_la_postulation }}</td>
                                    <td>
                                        <a href="{{ asset('storage/'.$candidat->CV) }}"
                                        class="view-application" target="_blank">
                                        Telecharger le CV
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    @else
                        <span> Il n'y pas de candidatures disponibles</span>
                    @endif
            </div>
            {{-- fin du tableau de candidature. --}}
        </div>
    </div>
 </div>
</div>
</main>
{{-- fin du Tableau de Bord --}}

  <!-- /.card -->
</section>
<!-- /.content -->
@endsection
