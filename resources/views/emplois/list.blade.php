@extends('layouts.tpl')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
            <h1>Liste des offres d'emplois</h1>
          </div>
          <div class="col-sm-3 pull-right">
            <a href="{{ url('admin/add-offre-emploi') }}" class="btn btn-default btn-md"><strong>Ajouter une offre d'emploi</strong></a>
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
          @if($emplois->count() > 0)

            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Date de publication</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @if($emplois)
                        <?php $index = 1; ?>
                        @foreach($emplois as $emploi)
                            <tr>
                                <td>{{ $index++ }}</td>
                                <td><img src="{{ asset('assets/img/actualite/'.$emploi->image) }}" width="100px" height="100px" alt=""></td>
                                <td>{{ $emploi->titre }}</td>
                                <td>{{ str_limit($emploi->contenu, 100) }}</td>
                                <td>{{ $emploi->date_publication }}</td>
                                <td>
                                    <a href="{{route('delete.emploi',$emploi)}}" class="btn btn-info btn-alt btn-xs">
                                        <i class="fa fa-trash icon-remove"></i>
                                    </a>
                                    <a href="{{route('edit.emploi.form',$emploi)}}" class="btn btn-info btn-alt btn-xs">
                                        <i class="fa fa-edit icon-edit"></i>
                                    </a>
                                    <a href="{{route('retrieve.emploi',$emploi)}}" class="btn btn-info btn-alt btn-xs">
                                        <i class="fa fa-eye icon-eye"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
          @else
            <div class="alert alert-info">
              <p><strong>La liste des articles est vide.</strong></p>
            </div>
          @endif
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
