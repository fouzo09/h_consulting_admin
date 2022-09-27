@extends('layouts.tpl')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Détails de la formation</h1>
          </div>
          <div class="col-sm-2 pull-right">
            <a href="{{ route('edit.formation.form',$formation->id) }}" class="btn btn-default btn-md"><strong>Modifier le contenu de la formation</strong></a>
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
                <label for="#">Titre</label>
                <p>{{$formation->titre}}</p>
            </div>
            <div class="form-group">
                <label for="#">Contenu</label>
                <p>
                    {!! html_entity_decode($formation->contenu) !!}
                </p>
            </div>
            <div class="form-group">
                <label for="#">Formateur</label>
                <p>{{$formation->formateur}}</p>
            </div>
            <div class="form-group">
                <h5 for="#">Logo</h5>
                <img src="{{ asset('assets/img/formation/'.$formation->image) }}" alt="{{$formation->image}}" width="500px" height="500px">
            </div>
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
