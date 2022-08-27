@extends('layouts.tpl_front')
@section('content')
        @include("layouts.header_page")

        <div>
            <div class="dashboard-main-inner">
                <div class="row">
                    <div class="col-12">
                        <div class="page-breadcrumb-content mb-40">
                            <h1>Candidature</h1>
                        </div>
                    </div>
                </div>
                <div class="dashboard-overview">
                    <div class="row">
                        <div >
                            <div class="submited-applications mb-50">
                                <div class="applications-heading">
                                    <h3>Les differentes applications</h3>
                                </div>
                                <div class="applications-main-block">
                                    <div class="applications-table">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="width-35">Titre de l'emploi</th>
                                                    <th class="width-35">Contenu de l'emploi</th>
                                                    <th class="width-12">Date de la postulation</th>
                                                    <th class="width-15">Curruculum vitae (C.V)</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                               @forelse ($postulant as $item)

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
                                                            <a href="{{ asset('storage/'.$item->CV) }}" class="view-application" target="_blank">Telecharger le CV</a>
                                                        </td>
                                                    </tr>

                                                @empty
                                                    <span> Il n'ya pas d'enregistrement vous concernant</span> --}}
                                                @endforelse

                                            </tbody>
                                        </table>
                                    </div>

@endsection
