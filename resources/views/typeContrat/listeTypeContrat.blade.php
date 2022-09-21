@extends('layouts.tpl')

@section('content')

     <!-- Content Header (Page header) -->
     <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-10">
              <h1>Liste des types de contrat</h1>
            </div>
            <div class="col-sm-2 pull-right">
              <a href="{{ Route('createTypeContrat') }}" class="btn btn-default btn-md"><strong>Ajouter un type de contrat</strong></a>
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
              @if($typeContrats->count() > 0)
                <table class="table table-striped">
                    <thead>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @if($typeContrats)
                            <?php $n = 1; ?>
                            @foreach($typeContrats as $typeContrat)
                                <tr>
                                    <td>{{ $n++ }}</td>
                                    <td> {{ $typeContrat->nom }}</td>
                                    <td>
                                      <a href="{{route('supprimerTypeContrat',['id'=>$typeContrat->id])}}" class="btn btn-info btn-alt btn-xs">
                                          <i class="fa fa-trash icon-remove"></i>
                                      </a>
                                      <a href="{{route('modifieTypeContrat',['id'=>$typeContrat->id])}}" class="btn btn-info btn-alt btn-xs">
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
                    <p>
                        <strong>La liste des types contrats est vide.</strong>
                    </p>
                </div>
              @endif
          </div>
        </div>
        <!-- /.card -->
      </section>
      <!-- /.content -->


@endsection
