@extends('layouts.tpl')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Liste des Carrières</h1>
          </div>
          <div class="col-sm-2 pull-right">
            <a href="{{ url('admin/add-service') }}" class="btn btn-default btn-md"><strong>Ajouter une carrière</strong></a>
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
            @if($services->count() > 0)
              <table class="table table-striped">
                  <thead>
                      <th>#</th>
                      <th>Image</th>
                      <th>Service</th>
                      <th>Description</th>
                      <th>Actions</th>
                  </thead>
                  <tbody>
                      @if($services)
                          <?php $index = 1; ?>
                          @foreach($services as $service)
                              <tr>
                                  <td>{{ $index++ }}</td>
                                  <td><img src="{{ asset('assets/img/service/'.$service->image) }}" width="100px" height="100px" alt=""></td>
                                  <td>{{ $service->libelle }}</td>
                                  <td>
                                    <?php $description = str_limit($service->description, 200) ?>
                                        {!! html_entity_decode($description) !!}
                                  </td>
                                  <td>
                                    <a href="{{route('delete.service',$service)}}" class="btn btn-info btn-alt btn-xs">
                                        <i class="fa fa-trash icon-remove"></i>
                                    </a>
                                    <a href="{{route('edit.service.form',$service)}}" class="btn btn-info btn-alt btn-xs">
                                        <i class="fa fa-edit icon-edit"></i>
                                    </a>
                                    <a href="{{route('retrieve.service',$service)}}" class="btn btn-info btn-alt btn-xs">
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
              <p><strong>La liste des services est vide.</strong></p>
            </div>
            @endif
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
