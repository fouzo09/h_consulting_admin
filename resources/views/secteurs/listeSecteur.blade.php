@extends('layouts.tpl')

@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-10">
              <h1>Liste des Secteurs</h1>
            </div>
            <div class="col-sm-2 pull-right">
              <a href="{{ Route('createSecteur') }}" class="btn btn-default btn-md">
                <strong>Ajouter un secteur</strong>
              </a>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <hr>
      <!-- Main content -->
      <section class="content">
        <!-- Default box -->
        <div class="card">
          <div class="card-body">
              @if($secteurs->count() > 0)
                <table class="table table-striped">
                    <thead>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @if($secteurs)
                            <?php $n = 1; ?>
                            @foreach($secteurs as $secteur)
                                <tr>
                                    <td>{{ $n++ }}</td>
                                    <td> {{ $secteur->nom }}</td>
                                    <td>
                                      <a href="{{route('supprimerSecteur',['id'=>$secteur->id])}}" class="btn btn-info btn-alt btn-xs">
                                          <i class="fa fa-trash icon-remove"></i>
                                      </a>
                                      <a href="{{route('modifieSecteur',['id'=>$secteur->id])}}" class="btn btn-info btn-alt btn-xs">
                                          <i class="fa fa-edit icon-edit"></i>
                                      </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
              @else
              <div class="alert alert-info">
                <p><strong>La liste des secteurs est vide.</strong></p>
              </div>
              @endif
          </div>
        </div>
        <!-- /.card -->
      </section>
      <!-- /.content -->

@endsection
