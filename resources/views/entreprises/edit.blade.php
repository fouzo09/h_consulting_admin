@extends('layouts.tpl')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Modifier les information de l'entreprise</h1>
          </div>
          <div class="col-sm-2 pull-right">
            <a href="{{ route('list.entreprises') }}" class="btn btn-default btn-md"><strong>Afficher les entreprises</strong></a>
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
            <form action="{{ route('edit.entreprise',$entreprise->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="#">Raison sociale</label>
                    <input class="form-control" type="text" name="raison_sociale" id="raison_sociale" value="{{$entreprise->raison_sociale}}">
                    @if($errors->has('raison_sociale'))
                        <div class="error text-danger">{{ $errors->first('raison_sociale') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="#">Adresse</label>
                    <textarea class="form-control" name="adresse" id="" cols="10" rows="10">{{$entreprise->adresse}}</textarea>
                    @if($errors->has('adresse'))
                        <div class="error text-danger">{{ $errors->first('adresse') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="#">Logo</label>
                    <input class="form-control" type="file" name="logo" id="logo" value="{{$entreprise->logo}}">
                    @if($errors->has('logo'))
                        <div class="error text-danger">{{ $errors->first('logo')}}</div>
                    @endif
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Modifier</button>
                </div>
            </form>
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
