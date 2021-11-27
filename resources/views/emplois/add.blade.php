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
                    <label for="#">Entreprises</label>
                    
                      <select name="entreprises" id="entreprises" class="form-control">
                          <option selected disabled>Selectionnez une entreprise</option>
                          @foreach($entreprises as $entreprise)
                            <option value="{{ $entreprise->id }}">{{ $entreprise->raison_sociale }}</option>
                          @endforeach
                      </select>
                   
                    @if($errors->has('entreprises'))
                        <div class="error">{{ $errors->first('entreprises') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="#">Grades</label>
                    
                      <select name="grades" id="grades" class="form-control">
                          <option selected disabled>Selectionnez une grade</option>
                          @foreach($grades as $grade)
                            <option value="{{ $grade->id }}">{{ $grade->nom }}</option>
                          @endforeach
                      </select>
                   
                    @if($errors->has('entreprises'))
                        <div class="error">{{ $errors->first('entreprises') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="#">Type de contrats</label>
                      <select name="types" id="types"   class="form-control">
                          <option selected disabled>Selectionnez le type de l'offre</option>
                          @foreach($types as $type)
                            <option value="{{ $type->id }}">{{ $type->nom }}</option>
                          @endforeach
                      </select>
                    
                    @if($errors->has('types'))
                        <div class="error">{{ $errors->first('types') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="#">Domaines</label>
                    
                      <select name="domaines[]" id="domaines"  multiple="multiple" class="form-control">
                          @foreach($domaines as $domaine)
                            <option value="{{ $domaine->id }}">{{ $domaine->nom }}</option>
                          @endforeach
                      </select>
                   
                    @if($errors->has('domaines'))
                        <div class="error">{{ $errors->first('domaines') }}</div>
                    @endif
                </div>
                
                <div class="form-group">
                    <label for="#">Secteurs</label>
                    
                      <select name="secteurs[]" id="secteurs" multiple="multiple" class="form-control">
                          @foreach($secteurs as $secteur)
                            <option value="{{ $secteur->id }}">{{ $secteur->nom }}</option>
                          @endforeach
                      </select>
                    
                    @if($errors->has('secteurs'))
                        <div class="error">{{ $errors->first('secteurs') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="#">Villes</label>
                    
                      <select name="villes[]" id="villes" multiple="multiple" class="form-control">
                          @foreach($villes as $ville)
                            <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                          @endforeach
                      </select>
                   
                    @if($errors->has('villes'))
                        <div class="error">{{ $errors->first('villes') }}</div>
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
                    <label for="#">Nombre minimum d'année d'experience</label>
                    <input class="form-control" type="number" min="1" value="1" name="experience" id="experience">
                    @if($errors->has('experience'))
                        <div class="error">{{ $errors->first('experience') }}</div>
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