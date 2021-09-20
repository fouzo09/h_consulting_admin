@extends('layouts.tpl')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Ajout d'une entreprise</h1>
          </div>
          <div class="col-sm-2 pull-right">
            <a href="{{ url('admin/list-entreprise') }}" class="btn btn-default btn-md"><strong>Afficher les entreprises</strong></a>
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
            <form action="{{ url('admin/add-entreprises') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="#">Raison sociale</label>
                    <input class="form-control" type="text" name="raison sociale" id="raison sociale">
                    @if($errors->has('raison sociale'))
                        <div class="error">{{ $errors->first('raison sociale') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="#">Adresse</label>
                    <textarea class="form-control" name="adresse" id="" cols="10" rows="10"></textarea>
                    @if($errors->has('adresse'))
                        <div class="error">{{ $errors->first('adresse') }}</div>
                    @endif
                </div>
                
                <div class="form-group">
                    <label for="#">Logo</label>
                    <input class="form-control" type="file" name="logo" id="logo">
                    @if($errors->has('logo'))
                        <div class="error">{{ $errors->first('logo') }}</div>
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