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
@if(!$user->id)
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
@endif
