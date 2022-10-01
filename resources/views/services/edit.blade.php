@extends('layouts.tpl')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Modifier les information de la carrière</h1>
          </div>
          <div class="col-sm-2 pull-right">
            <a href="{{ url('admin/list-services') }}" class="btn btn-default btn-md"><strong>Afficher les carrières</strong></a>
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
            <form action="{{ route('edit.service',$service->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="#">Libelle</label>
                    <input class="form-control" type="text" name="libelle" id="libelle" value="{{$service->libelle}}">
                    @if($errors->has('libelle'))
                        <div class="error text-danger">{{ $errors->first('libelle') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="#">Description</label>
                    <textarea class="form-control" name="description" id="summary-ckeditor" cols="30" rows="10">{{$service->description}}</textarea>
                    @if($errors->has('description'))
                        <div class="error text-danger">{{ $errors->first('description') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="#">Image</label>
                    <input class="form-control" type="file" name="image" id="image" value="{{$service->image}}">
                    @if($errors->has('image'))
                        <div class="error text-danger">{{ $errors->first('image') }}</div>
                    @endif
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-edit"></i>
                        Modifier</button>
                </div>
            </form>
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
