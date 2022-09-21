@extends('layouts.tpl')
@section('content')
       <!-- Content Header (Page header) -->
       <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
            <h1>Ajout d'un nouvel utilisateur</h1>
          </div>
          <div class="col-sm-3 pull-right">
            <a href="{{ url('admin/list-users') }}" class="btn btn-default btn-md"><strong>Afficher la liste des utilisateurs</strong></a>
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
            <form action="{{ url('admin/add-user') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group mb-3">
                      <input id="firstName" type="text" placeholder="Nom" class="form-control @error('firstName') is-invalid @enderror" name="firstName"  required autocomplete="firstName" autofocus>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                      </div>
                      @error('firstName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="input-group mb-3">
                      <input id="lastName" type="text" placeholder="Prénom" class="form-control @error('lastName') is-invalid @enderror" name="lastName" required autocomplete="lastName" autofocus>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                      </div>
                      @error('lastName')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="input-group mb-3">
                      <input id="phone" type="text" placeholder="Téléphone" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="phone" autofocus>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-phone"></span>
                        </div>
                      </div>
                      @error('phone')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="input-group mb-3">
                      <input id="email" type="email" placeholder="Adresse email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                      </div>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group mb-3">
                        <select class="form-control @error('role_id') is-invalid @enderror" name="role_id" required autocomplete="role_id" autofocus>
                            <option selected>Choisissez le rôle de l'utilisateur</option>
                          @foreach ( \App\Role::all() as $role)
                            <option value="{{$role->id}}"> {{$role->nom}} </option>
                          @endforeach
                        </select>
                        @error('role_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                      <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password" autofocus>
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="input-group mb-3">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save "></i>
                        Enregistrer
                    </button>
                  </div>
                </div>
            </form>
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
