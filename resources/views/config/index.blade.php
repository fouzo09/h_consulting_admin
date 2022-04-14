@extends('layouts.tpl')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
            <h1>Configuration de la plateforme</h1>
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
            @if(\Session::has('success'))
                <div class="alert alert-success">{{ \Session::get('success') }}</div>
            @endif

            @if(\Session::has('error'))
                <div class="alert alert-error">{{ \Session::get('error') }}</div>
            @endif
            <form action="{{ url('admin/config') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="#">Nom de la plateforme</label>
                            <input type="text" class="form-control" name="nom_plateforme" value="{{ $config->nom_plateforme }}">
                            <div class="text-danger">{{ ($errors->has('nom_plateforme')) ? $errors->first('nom_plateforme') : '' }}</div>
                        </div>
                        <div class="form-group">
                            <label for="#">Telephone</label>
                            <input type="text" class="form-control" name="telephone" value="{{ $config->telephone }}">
                            <div class="text-danger">{{ ($errors->has('telephone')) ? $errors->first('telephone') : '' }}</div>
                        </div>
                        <div class="form-group">
                            <label for="#">Logo</label>
                            <input type="file" class="form-control" name="logo" >
                            <div class="text-danger">{{ ($errors->has('logo')) ? $errors->first('logo') : '' }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="#">Email</label>
                            <input type="text" class="form-control" name="email" value="{{ $config->email }}">
                            <div class="text-danger">{{ ($errors->has('email')) ? $errors->first('email') : '' }}</div>
                        </div>
                        <div class="form-group">
                            <label for="#">Adresse</label>
                            <input type="text" class="form-control" name="adresse" value="{{ $config->adresse }}">
                            <div class="text-danger">{{ ($errors->has('adresse')) ? $errors->first('adresse') : '' }}</div>
                        </div>
                        <div class="form-group">
                            <label for="#">Activer l'envoie de notifications</label>
                            @if($config->activation_notification == 1)
                                <p><input type="checkbox" name="activation_notification" checked="true"></p>
                            @else
                                <p><input type="checkbox" name="activation_notification" ></p>
                            @endif
                        </div>
                    </div>
                </div>
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