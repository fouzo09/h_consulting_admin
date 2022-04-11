@extends('layouts.tpl')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Les détails de l'actualité</h1>
          </div>
          <div class="col-sm-2 pull-right">
            <a href="{{ route('edit.actualite.form',$actualite->id) }}" class="btn btn-default btn-md"><strong>Modifier les information de l'actualité</strong></a>
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
                <p>{{$actualite->titre}}</p>
            </div>
            <div class="form-group">
                <label for="#">Contenu</label>
                <p>{{$actualite->contenu}}</p>
            </div>
            <div class="form-group">
                <label for="#">Date publication</label>
                <p>{{$actualite->date_publication}}</p>
            </div>
            <div class="form-group">
                <h5 for="#">Image</h5>
                <img src="{{ asset('assets/img/actualite/'.$actualite->image) }}" alt="{{$actualite->image}}" width="500px" height="500px">
            </div>
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
