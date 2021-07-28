@extends('layouts.app2')
@section('content')
    <!-- /.register-box -->
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="register-box mt-5">
                    @if(Session::has('success'))
                        <p class="alert alert-success">{{ Session::get('success') }}</p>                
                    @endif
                    @if(Session::has('error'))
                      <p class="alert alert-danger">{{ Session::get('error') }}</p>                
                    @endif
                    <div class="register-logo">
                      <a href="#"><b>HighRevolution</b>TECH</a>
                    </div>
                       
                    <div class="card">
                      <div class="card-body register-card-body">
                        <p class="login-box-msg">Enregistrer un nouvel utilisateur</p>
                  
                        <form action="{{route('register')}}" method="post">
                          @csrf
                           @include('users._form')
                          <div class="row">
                            <!-- /.col --> <div class="col-8"></div>
                            <div class="col-4">
                              <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                            <!-- /.col -->
                          </div>
                        </form>
                   
                      </div>
                      <!-- /.form-box -->
                    </div><!-- /.card -->
                </div>
            </div>
        </div>
    </div>
@endsection