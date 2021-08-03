@extends('layouts.tpl')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row md-2">
        <div class="col-md-6">
          <h1>
            {{-- Modals &amp; Alerts  --}}
            Nouvel
            <small>Role</small>
          </h1>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Modals &amp; Alerts</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
<div class="container-fluid">
    <div class="row">
      
      <div class="col-md-10 offset-1">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              {{-- <i class="fas fa-edit"></i> --}}
              <h3 class="panel-title">{{$title}}</h3>
            </h3>
          </div>
          <div class="card-body">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        {{-- <h3 class="panel-title">{{ $title }}</h3> --}}
                        
                    </div>
        
                    <!--Horizontal Form-->
                    <!--===================================================-->
        
                    <form action="{{route('role-store')}}" method="post">
                        @csrf
                        <div class="panel-body">
                            <div class="panel-body">
                                <div class="col-md-6 offset-3">
                                    @include('roles._form')
                                </div>
                            </div>
                            <div class="panel-footer">
                                <h4>Affecter les permissions</h4>
        
                                <div class="row">
                                    @php $lastType = ''; @endphp
                                    @foreach($permissions as $permission)
                                        @php $currentType = $permission->type @endphp
        
                                        @if($lastType != $currentType)
                                            @php $lastType = $currentType; @endphp
        
                                            <div class="col-md-10">
                                                <h3> {{ $permission->type }} </h3>
                                            </div>
                                            
                                        @endif
        
                                        <div class="col-md-4">
                                            <input type="checkbox" name="permissions[]"
                                                id="{{ $permission->permission }}"
                                                value="{{ $permission->id }} ">
                                            <label for="{{ $permission->permission }}" class="margin">
                                                <b> {{ $permission->label}}</b>
                                            </label>
                                        </div>    
                                            
                                    @endforeach
                                </div>
                            
        
                                <div class="text-right">
                                    <button class="btn btn-success" type="submit">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--===================================================-->
                    <!--End Horizontal Form-->
        
                </div>
            </div>
          </div>
          <!-- /.card -->
        </div>

        
         
      </div>
      <!-- /.col -->
    </div>
    <!-- ./row -->
</div> 
@endsection
