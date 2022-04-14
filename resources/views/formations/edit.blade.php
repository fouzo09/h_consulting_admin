@extends('layouts.tpl')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Modifier le contenu de la formation</h1>
          </div>
          <div class="col-sm-2 pull-right">
            <a href="{{ url('admin/list-formations') }}" class="btn btn-default btn-md"><strong>Afficher les formations</strong></a>
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
            <form action="{{ route('edit.formation',$formation) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="#">Titre</label>
                    <input class="form-control" type="text" name="titre" id="titre" value="{{$formation->titre}}">
                    @if($errors->has('titre'))
                        <div class="error text-danger">{{ $errors->first('titre') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="#">Contenu</label>
                    <textarea class="form-control" name="contenu" id="" cols="30" rows="10">{{$formation->contenu}}</textarea>
                    @if($errors->has('contenu'))
                        <div class="error text-danger">{{ $errors->first('contenu') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="#">Formateur</label>
                    <input class="form-control" type="text" name="formateur" id="formateur" value="{{$formation->formateur}}">
                    @if($errors->has('formateur'))
                        <div class="error text-danger">{{ $errors->first('formateur') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="#">Image</label>
                    <input class="form-control" type="file" name="image" id="image" value="{{$formation->image}}">
                    @if($errors->has('image'))
                        <div class="error text-danger">{{ $errors->first('image') }}</div>
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
