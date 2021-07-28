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
                        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">
                            <i class="nav-icon fas fa-list"></i>
                            Informations de contact
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-other-other-tab" data-toggle="pill" href="#custom-tabs-other-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">
                            <i class="nav-icon fas fa-list"></i>
                            Autres
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                    <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                       <form action="{{ url('config-contact/save') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="#">Presentation</label>
                                <textarea class="textarea" placeholder="Place some text here" name="presentation" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ (isset($contact)) ? $contact->presentation : '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="#">Mission</label>
                                <textarea class="textarea" placeholder="Place some text here" name="mission" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ (isset($contact)) ? $contact->mission : '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="#">Telephone</label>
                                <input type="text" name="telephone" value="{{ (isset($contact)) ? $contact->telephone : '' }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="#">E-mail</label>
                                <input type="text" name="email" value="{{ (isset($contact)) ? $contact->email : '' }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-dark">Enregistrer</button>
                            </div>
                       </form>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-other-home" role="tabpanel" aria-labelledby="custom-tabs-other-home-tab">
                       <form action="{{ url('config-add') }}" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#">% parrainage</label>
                                        <input type="text" name="pourcentage_parrainage" value="{{ (isset($config)) ? $config->pourcentage_parrainage : '' }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-dark">Enregistrer</button>
                            </div>
                       </form>
                    </div>
                </div>
                
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
