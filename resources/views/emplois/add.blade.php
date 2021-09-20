@extends('layouts.tpl')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
            <h1>Ajout d'une offre d'emploi</h1>
          </div>
          <div class="col-sm-3 pull-right">
            <a href="{{ url('admin/list-offres-emplois') }}" class="btn btn-default btn-md"><strong>Afficher les offres d'emplois</strong></a>
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
            <form action="{{ url('admin/add-offre-emploi') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="#">Titre de l'offre</label>
                    <input class="form-control" type="text" name="titre" id="titre">
                    @if($errors->has('titre'))
                        <div class="error">{{ $errors->first('titre') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="#">Contenu</label>
                    <textarea class="form-control" name="contenu" id="" cols="30" rows="10"></textarea>
                    @if($errors->has('contenu'))
                        <div class="error">{{ $errors->first('contenu') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="#">Date publication</label>
                    <input class="form-control" type="date" name="date_publication" id="date_publication">
                    @if($errors->has('date_publication'))
                        <div class="error">{{ $errors->first('date_publication') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="#">Image</label>
                    <input class="form-control" type="file" name="image" id="image">
                    @if($errors->has('image'))
                        <div class="error">{{ $errors->first('image') }}</div>
                    @endif
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                </div>
            </form>
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection