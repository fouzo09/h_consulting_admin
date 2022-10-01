@extends('layouts.tpl')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Liste des formations</h1>
          </div>
          <div class="col-sm-2 pull-right">
            <a href="{{ url('admin/add-formation') }}" class="btn btn-default btn-md"><strong>Ajouter une formation</strong></a>
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
          @if($formations->count() > 0)

            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Formateur</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <?php $index = 1; ?>
                    @foreach($formations as $formation)
                        <tr>
                            <td>{{ $index++ }}</td>
                            <td>
                                <img src="{{ asset('assets/img/formation/'.$formation->image) }}"
                                width="100px" height="100px" alt="">
                            </td>
                            <td>{{ $formation->titre }}</td>
                            <td>
                                <?php $contenu = str_limit($formation->contenu, 200) ?>
                                    {!! html_entity_decode($contenu) !!}
                            </td>
                            <td>{{ $formation->formateur }}</td>
                            <td>
                                <a href="{{route('delete.formation',$formation)}}" class="btn btn-info btn-alt btn-xs">
                                    <i class="fa fa-trash icon-remove"></i>
                                </a>
                                <a href="{{route('edit.formation.form',$formation)}}" class="btn btn-info btn-alt btn-xs">
                                    <i class="fa fa-edit icon-edit"></i>
                                </a>
                                <a href="{{route('retrieve.formation',$formation)}}" class="btn btn-info btn-alt btn-xs">
                                    <i class="fa fa-eye icon-eye"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          @else
            <div class="alert alert-info">
              <p><strong>La liste des formations est vide.</strong></p>
            </div>
          @endif
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
