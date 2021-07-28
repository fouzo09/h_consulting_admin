@extends('layouts.app2')
@section('content')
  
  <div class="row">
      <div class="col-md-4 offset-4">
          <div class="card card-primary card-outline mt-3">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="{{asset('assets/dist/img/user4-128x128.jpg')}}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$user->firstName.' '.$user->lastName}}</h3>

                <p class="text-muted text-center">{{$user->role->nom}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                    <b>Téléphone</b> <a class="float-right">{{$user->phone}}</a>
                    </li>
                    <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{$user->email}}</a>
                    </li>
                    <li class="list-group-item">
                    <b>Status</b> <a class="float-right">{{$user->status ?'active':'Non active'}}</a>
                    </li>
                </ul>

                <a href="{{route('user.edit.form',$user->id)}}" class="btn btn-primary btn-block"><b>Mettre à jour</b></a>
            </div>
            <!-- /.card-body -->
          </div>  
      </div>
  </div>
@endsection