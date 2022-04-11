@extends('layouts.tpl')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Les details de l'entreprise</h1>
          </div>
          <div class="col-sm-2 pull-right">
            <a href="{{ route('edit.entreprise.form',$entreprise->id) }}" class="btn btn-default btn-md"><strong>Modifier les informations de l'entreprises</strong></a>
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
                <label for="#">Raison sociale : </label>
                <p>{{$entreprise->raison_sociale}}</p>
            </div>
            <div class="form-group">
                <label for="#">Adresse </label>
                <p>{{$entreprise->adresse}}</p>
            </div>
            <div class="form-group">
                <h5 for="#">Logo</h5>
                <img src="{{ asset('assets/img/entreprise/'.$entreprise->logo) }}" alt="{{$entreprise->logo}}" width="500px" height="500px">
            </div>
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
