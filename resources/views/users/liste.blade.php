@extends('layouts.tpl')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
            <h1>Liste des utilisateurs</h1>
          </div>
          <div class="col-sm-3 pull-right">
            <a href="{{ url('admin/add-user') }}" class="btn btn-default btn-md"><strong>Ajouter un utilisateur</strong></a>
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
          @if($users->count() > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nom & Prénom</th>
                        <th>Téléphone</th>
                        <th>Adresse Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0 ; ?>
                    @foreach ($users as $user)
                        <tr role="row" class="odd">
                            <td>{{ ++$i }}</td>
                            <td>{{ $user->firstName.' '.$user->lastName }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role->nom }}</td>
                            <td>
                                <a href="{{route('user.delete',$user->id)}}" class="btn btn-info btn-alt btn-xs">
                                    <i class="fa fa-trash icon-remove"></i>
                                </a>
                                <a href="{{route('user.edit.form',$user->id)}}" class="btn btn-info btn-alt btn-xs">
                                    <i class="fa fa-edit icon-edit"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
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
