@extends('layouts.tpl')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Les détails du service</h1>
          </div>
          <div class="col-sm-2 pull-right">
            <a href="{{ route('edit.service.form',$service->id) }}" class="btn btn-default btn-md"><strong>Modifier les information du service</strong></a>
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
            <div class="form-group">
                <label for="#">Libelle</label>
                <p>{{$service->libelle}}</p>
            </div>
            <div class="form-group">
                <label for="#">Description</label>
                <p>
                   {!! html_entity_decode($service->description) !!}
                </p>
            </div>
            <div class="form-group">
                <h5 for="#">Logo</h5>
                <img src="{{ asset('assets/img/service/'.$service->image) }}" alt="{{$service->image}}" width="500px" height="500px">
            </div>
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
