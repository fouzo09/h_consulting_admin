@extends('layouts.tpl')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Liste des entreprises</h1>
          </div>
          <div class="col-sm-2 pull-right">
            <a href="{{ url('admin/add-entreprise') }}" class="btn btn-default btn-md"><strong>Ajouter une entreprise</strong></a>
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
          @if($entreprises->count() > 0)
          
            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>Logo</th>
                    <th>Raison sociale</th>
                    <th>Adresse</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <?php $index = 1; ?>
                    @foreach($entreprises as $entreprise)
                        <tr>
                            <td>{{ $index++ }}</td>
                            <td><img src="{{ asset('assets/img/actualite/'.$entreprise->image) }}" width="100px" height="100px" alt=""></td>
                            <td>{{ $entreprise->raison_sociale }}</td>
                            <td>{{ $entreprise->adresse }}</td>
                            <td>
                                <i class="fa fa-trash icon-remove"></i>
                                <i class="fa fa-edit icon-edit"></i>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          @else
            <div class="alert alert-info">
              <p><strong>La liste des entreprises est vide.</strong></p>
            </div>
          @endif
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection