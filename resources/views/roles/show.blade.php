@extends('layouts.app2')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="tab-base">

                <!--Nav Tabs-->
                <ul class="nav nav-tabs">
                    <li class="active ml-3">
                        <a data-toggle="tab" href="#demo-lft-tab-1"><h1>Utilisateurs</h1> </a>
                    </li>
                    <li class="ml-3">
                        <a data-toggle="tab" href="#demo-lft-tab-2"><h1>Permissions</h1></a>
                    </li>


                </ul>

                <div class="tab-content">
                    <div id="demo-lft-tab-1" class="tab-pane fade active in mt-3">

                       <div class="row">
                         <div class="col-md-10 offset-1">
                          <div class="card card-primary card-outline">
                            <div class="card-header">
                              <h3 class="card-title">
                                <i class="fas fa-users"></i>
                                Utilisateurs
                              </h3>
                            </div>
                            <div class="card-body">
                                <div class="panel mt-3">
                                    <div class="panel-heading">
                                        {{-- <h3 class="panel-title" style="display: inline;">Utilisateurs</h3> --}}
                                    </div>
        
                                    <div class="panel-body">
                                        <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0"
                                                width="100%">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nom & Prénom</th>
                                                <th>Email</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(!empty($users))
                                                @foreach($users as $user)
                                                    <tr>
                                                        <td>{{$loop->index+1}}</td>
        
                                                        <td>
                                                            <a href="{{ route('user.show', $user->id) }}">
                                                                {{ $user->firstName.'  '.$user->lastName }}
                                                            </a>
                                                        </td>
        
                                                        <td>
                                                            {{ $user->email}}
        
                                                        </td>
        
                                                    </tr>
        
        
                                                @endforeach
                                            @else
                                                <p class="alert alert-danger">Aucune information disponible pour le
                                                    moment!</p>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
        
        
                                </div>
                            </div>
                            <!-- /.card -->
                           </div> 
                          </div>
                       </div>
                        
                    </div>


                    <div id="demo-lft-tab-2" class="tab-pane fade mt-3">

                        
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                              <h3 class="card-title">
                                <i class="fas fa-list"></i>
                                Permissions
                              </h3>
                            </div>
                            <div class="card-body">
                                <div class="panel mt-3">
                                    <div class="panel-heading">
                                        {{-- <h3 class="panel-title" style="display: inline;">Permissions</h3> --}}
                                    </div>
        
                                    <div class="panel-body mt-3">
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
                                                            value="{{ $permission->id }} " checked>
                                                    <label for="{{ $permission->permission }}" class="margin">
                                                        <b> {{ $permission->label}}</b>
                                                    </label>
                                                </div>
                                            @endforeach 
                                         
                                         
                                        </div>
                                    </div>
        
        
                                </div>
                            </div>
                            <!-- /.card -->
                          </div>
                    </div>


                </div>

            </div>

        </div>
    </div>
@endsection

 