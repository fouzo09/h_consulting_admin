@extends('layouts.tpl')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Liste des actualités</h1>
          </div>
          <div class="col-sm-2 pull-right">
            <a href="{{ url('admin/add-actualite') }}" class="btn btn-default btn-md"><strong>Ajouter une actualité</strong></a>
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
          @if($actualites->count() > 0)

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
                    @if($actualites)
                        <?php $index = 1; ?>
                        @foreach($actualites as $actualite)
                            <tr>
                                <td>{{ $index++ }}</td>
                                <td><img src="{{ asset('assets/img/actualite/'.$actualite->image) }}" width="100px" height="100px" alt=""></td>
                                <td>{{ $actualite->titre }}</td>
                                <td>{{ str_limit($actualite->contenu, 100) }}</td>
                                <td>{{ $actualite->date_publication }}</td>
                                <td>
                                    <a href="{{route('delete.actualite',$actualite)}}" class="btn btn-info btn-alt btn-xs">
                                        <i class="fa fa-trash icon-remove"></i>
                                    </a>
                                    <a href="{{route('edit.actualite.form',$actualite)}}" class="btn btn-info btn-alt btn-xs">
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
              <p><strong>La liste des articles est vide.</strong></p>
            </div>
          @endif
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
