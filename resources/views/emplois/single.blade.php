@extends('layouts.tpl')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
            <h1>Les détails de l'offre</h1>
          </div>
          <div class="col-sm-3 pull-right">
            <a href="{{ route('edit.emploi.form',$emploi) }}" class="btn btn-default btn-md"><strong>Modifier les information de l'offre d'emploi</strong></a>
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
                <label for="#">Titre de l'offre</label>
                <p>{{$emploi->titre}}</p>
            </div>
            <div class="form-group">
                <label for="#">Entreprises</label>
                <p>{{\App\Models\Entreprise::find($emploi->entreprise_id)->raison_sociale }}</p>
            </div>
            <div class="form-group">
                <label for="#">Grades</label>
                <p>{{\App\Models\Grade::find($emploi->grade_id)->nom }}</p>
            </div>
            <div class="form-group">
                <label for="#">Type de contrats</label>
                <p>{{\App\Models\Type::find($emploi->type_id)->nom }}</p>
            </div>
            <div class="form-group">
                <label for="#">Contenu</label>
                <p>{{$emploi->contenu}}</p>
            </div>
            <div class="form-group">
                <label for="#">Date publication</label>
                <p>{{$emploi->date_publication}}</p>
            </div>
            <div class="form-group">
                <label for="#">Nombre minimum d'année d'experience</label>
                <p>{{$emploi->experience}} an</p>
            </div>
            <div class="form-group">
                <h5 for="#">Logo</h5>
                <img src="{{ asset('assets/img/offres-emplois/'.$emploi->image) }}" alt="{{$emploi->image}}" width="500px" height="500px">
            </div>
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
