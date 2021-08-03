@extends('layouts.tpl')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <a href="#"></a>
        </div>
    </div>

    <div class="col-12 col-sm-12">
        <div class="card card-dark card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-home-tab"  href="{{route('users-list')}}"  aria-selected="false">
                            <i class="nav-icon fas fa-list"></i>
                            Liste des utilisateurs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-home-tab"  href="{{route('users-list')}}"  aria-selected="false">
                            <i class="nav-icon fas fa-add"></i>
                            Enregistrer un utilisateur
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">
                            <i class="nav-icon fas fa-edit"></i>
                            Modification
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                    <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">

                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">

                    </div>
                    <div class="tab-pane fade active show" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                        <form action="{{ route('user.edit',$user->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="input-group mb-3">
                                    <input id="firstName" type="text" placeholder="Nom" class="form-control @error('firstName') is-invalid @enderror" name="firstName"  required autocomplete="firstName" autofocus value="{{$user->firstName}}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                      <span class="fas fa-user"></span>
                                    </div>
                                </div>
                                </div>
                                @error('firstName')
                                   <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                              <div class="input-group mb-3">
                                <input id="lastName" type="text" placeholder="Prénom" class="form-control @error('lastName') is-invalid @enderror" name="lastName" required autocomplete="lastName" autofocus value="{{$user->lastName}}">
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
                                <input id="phone" type="text" placeholder="Téléphone" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="phone" autofocus value="{{$user->phone}}">
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
                                <input id="email" type="email" placeholder="Adresse email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocusvalue="{{$user->email}}" >
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
                              <div class="input-group mb-3">
                                    <select class="form-control @error('role_id') is-invalid @enderror" name="role_id" required autocomplete="role_id" autofocus value="{{$user->role_id}}">
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
                            @if(!$user->id)
                              <div class="input-group mb-3">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ $user->password}}" required autocomplete="password" autofocus>
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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ $user->password}}" required autocomplete="new-password">
                                <div class="input-group-append">
                                  <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                  </div>
                                </div>
                              </div>
                            @endif
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-dark">Modifier</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
