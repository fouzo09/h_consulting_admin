@extends('layouts.app2')
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
                        <a class="nav-link" id="custom-tabs-four-home-tab"  href="{{route('role-index')}}"  aria-selected="false">
                            <i class="nav-icon fas fa-list"></i>
                            Liste des rôles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-home-tab"  href="{{route('role-index')}}"  aria-selected="false">
                            <i class="nav-icon fas fa-add"></i>
                            Enregistrer un rôle
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
                                <div class="form-group">
                                    <div class="col-sm-8 offset-2">
                                        <label class="" for="nom"><b>Nom</b></label>
                                        <input type="text" placeholder="Exemple: RH, Logistique, maintenance" name="nom" id="nom" class="form-control" value="{{$role->nom}}">
                                        <span class="text-danger">{{ ($errors->has('nom')) ? $errors->first('nom') : '' }}</span>
                                    </div>
                                </div>
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
