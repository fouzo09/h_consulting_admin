@extends('layouts.app2')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            @if(Session::has('success'))
                <p class="alert alert-success">{{ Session::get('success') }}</p>
            @endif
            @if(Session::has('error'))
                <p class="alert alert-danger">{{ Session::get('error') }}</p>
            @endif
        </div>
    </div>

    <div class="col-12 col-sm-12">
        <div class="card card-dark card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">
                            <i class="nav-icon fas fa-list"></i>
                            Liste des centres
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">
                            <i class="nav-icon fas fa-plus"></i>
                            Ajouter nouveau Centre
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                    <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">N°</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">column 1</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">column 2</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">column 3</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">column 4</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">column 5</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                  <td>Trident</td>
                                  <td>Internet
                                    Explorer 4.0
                                  </td>
                                  <td>Win 95+</td>
                                  <td> 4</td>
                                  <td>X</td>
                                  <td class="text-center">
                                        <a href="#" class="btn btn-icon btn-circle">
                                            <span class="fas fa-eye action my-fa-eye"></span>
                                        </a>
                                        <a href="#"
                                         class="btn btn-icon btn-circle ml-2">
                                            <span class="fas fa-edit action my-fa-edit"></span>
                                        </a>

                                        <a href="#"
                                            class="btn btn-icon btn-circle deleterole ml-2">
                                            <span class="fas fa-trash-alt action my-fa-remove"></span>
                                        </a>
                                  </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                  <td>Trident</td>
                                  <td>Internet
                                    Explorer 5.0
                                  </td>
                                  <td>Win 95+</td>
                                  <td>5</td>
                                  <td>C</td>
                                  <td class="text-center">
                                    <a href="#" class="btn btn-icon btn-circle">
                                        <span class="fas fa-eye action my-fa-eye"></span>
                                    </a>
                                    <a href="#"
                                     class="btn btn-icon btn-circle ml-2">
                                        <span class="fas fa-edit action my-fa-edit"></span>
                                    </a>

                                    <a href="#"
                                        class="btn btn-icon btn-circle deleterole ml-2">
                                        <span class="fas fa-trash-alt action my-fa-remove"></span>
                                    </a>
                                </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                  <td>Trident</td>
                                  <td>Internet
                                    Explorer 5.5
                                  </td>
                                  <td>Win 95+</td>
                                  <td>5.5</td>
                                  <td>A</td>
                                  <td class="text-center">
                                    <a href="#" class="btn btn-icon btn-circle">
                                        <span class="fas fa-eye action my-fa-eye"></span>
                                    </a>
                                    <a href="#"
                                     class="btn btn-icon btn-circle ml-2">
                                        <span class="fas fa-edit action my-fa-edit"></span>
                                    </a>

                                    <a href="#"
                                        class="btn btn-icon btn-circle deleterole ml-2">
                                        <span class="fas fa-trash-alt action my-fa-remove"></span>
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                  <td>Trident</td>
                                  <td>Internet
                                    Explorer 6
                                  </td>
                                  <td>Win 98+</td>
                                  <td>6</td>
                                  <td>A</td>
                                  <td class="text-center">
                                    <a href="#" class="btn btn-icon btn-circle">
                                        <span class="fas fa-eye action my-fa-eye"></span>
                                    </a>
                                    <a href="#"
                                     class="btn btn-icon btn-circle ml-2">
                                        <span class="fas fa-edit action my-fa-edit"></span>
                                    </a>

                                    <a href="#"
                                        class="btn btn-icon btn-circle deleterole ml-2">
                                        <span class="fas fa-trash-alt action my-fa-remove"></span>
                                    </a>
                                 </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                  <td>Trident</td>
                                  <td>Internet Explorer 7</td>
                                  <td>Win XP SP2+</td>
                                  <td>7</td>
                                  <td>A</td>
                                  <td class="text-center">
                                    <a href="#" class="btn btn-icon btn-circle">
                                        <span class="fas fa-eye action my-fa-eye"></span>
                                    </a>
                                    <a href="#"
                                     class="btn btn-icon btn-circle ml-2">
                                        <span class="fas fa-edit action my-fa-edit"></span>
                                    </a>

                                    <a href="#"
                                        class="btn btn-icon btn-circle deleterole ml-2">
                                        <span class="fas fa-trash-alt action my-fa-remove"></span>
                                    </a>
                                 </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                  <td>Trident</td>
                                  <td>AOL browser (AOL desktop)</td>
                                  <td>Win XP</td>
                                  <td>6</td>
                                  <td>A</td>
                                  <td class="text-center">
                                    <a href="#" class="btn btn-icon btn-circle">
                                        <span class="fas fa-eye action my-fa-eye"></span>
                                    </a>
                                    <a href="#"
                                     class="btn btn-icon btn-circle ml-2">
                                        <span class="fas fa-edit action my-fa-edit"></span>
                                    </a>

                                    <a href="#"
                                        class="btn btn-icon btn-circle deleterole ml-2">
                                        <span class="fas fa-trash-alt action my-fa-remove"></span>
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                  <td>Gecko</td>
                                  <td>Firefox 1.0</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td>1.7</td>
                                  <td>A</td>
                                  <td class="text-center">
                                    <a href="#" class="btn btn-icon btn-circle">
                                        <span class="fas fa-eye action my-fa-eye"></span>
                                    </a>
                                    <a href="#"
                                     class="btn btn-icon btn-circle ml-2">
                                        <span class="fas fa-edit action my-fa-edit"></span>
                                    </a>

                                    <a href="#"
                                        class="btn btn-icon btn-circle deleterole ml-2">
                                        <span class="fas fa-trash-alt action my-fa-remove"></span>
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                  <td>Gecko</td>
                                  <td>Firefox 1.5</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                                  <td class="text-center">
                                    <a href="#" class="btn btn-icon btn-circle">
                                        <span class="fas fa-eye action my-fa-eye"></span>
                                    </a>
                                    <a href="#"
                                     class="btn btn-icon btn-circle ml-2">
                                        <span class="fas fa-edit action my-fa-edit"></span>
                                    </a>

                                    <a href="#"
                                        class="btn btn-icon btn-circle deleterole ml-2">
                                        <span class="fas fa-trash-alt action my-fa-remove"></span>
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                  <td>Gecko</td>
                                  <td>Firefox 2.0</td>
                                  <td>Win 98+ / OSX.2+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                                  <td class="text-center">
                                    <a href="#" class="btn btn-icon btn-circle">
                                        <span class="fas fa-eye action my-fa-eye"></span>
                                    </a>
                                    <a href="#"
                                     class="btn btn-icon btn-circle ml-2">
                                        <span class="fas fa-edit action my-fa-edit"></span>
                                    </a>

                                    <a href="#"
                                        class="btn btn-icon btn-circle deleterole ml-2">
                                        <span class="fas fa-trash-alt action my-fa-remove"></span>
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                  <td>Gecko</td>
                                  <td>Firefox 3.0</td>
                                  <td>Win 2k+ / OSX.3+</td>
                                  <td>1.9</td>
                                  <td>A</td>
                                  <td class="text-center">
                                    <a href="#" class="btn btn-icon btn-circle">
                                        <span class="fas fa-eye action my-fa-eye"></span>
                                    </a>
                                    <a href="#"
                                     class="btn btn-icon btn-circle ml-2">
                                        <span class="fas fa-edit action my-fa-edit"></span>
                                    </a>

                                    <a href="#"
                                        class="btn btn-icon btn-circle deleterole ml-2">
                                        <span class="fas fa-trash-alt action my-fa-remove"></span>
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                  <td>Gecko</td>
                                  <td>Camino 1.0</td>
                                  <td>OSX.2+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                                  <td class="text-center">
                                    <a href="#" class="btn btn-icon btn-circle">
                                        <span class="fas fa-eye action my-fa-eye"></span>
                                    </a>
                                    <a href="#"
                                     class="btn btn-icon btn-circle ml-2">
                                        <span class="fas fa-edit action my-fa-edit"></span>
                                    </a>

                                    <a href="#"
                                        class="btn btn-icon btn-circle deleterole ml-2">
                                        <span class="fas fa-trash-alt action my-fa-remove"></span>
                                    </a>
                                </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                  <td>Gecko</td>
                                  <td>Camino 1.5</td>
                                  <td>OSX.3+</td>
                                  <td>1.8</td>
                                  <td>A</td>
                                  <td class="text-center">
                                    <a href="#" class="btn btn-icon btn-circle">
                                        <span class="fas fa-eye action my-fa-eye"></span>
                                    </a>
                                    <a href="#"
                                     class="btn btn-icon btn-circle ml-2">
                                        <span class="fas fa-edit action my-fa-edit"></span>
                                    </a>

                                    <a href="#"
                                        class="btn btn-icon btn-circle deleterole ml-2">
                                        <span class="fas fa-trash-alt action my-fa-remove"></span>
                                    </a>
                                 </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                  <td>Gecko</td>
                                  <td>Netscape 7.2</td>
                                  <td>Win 95+ / Mac OS 8.6-9.2</td>
                                  <td>1.7</td>
                                  <td>A</td>
                                  <td class="text-center">
                                    <a href="#" class="btn btn-icon btn-circle">
                                        <span class="fas fa-eye action my-fa-eye"></span>
                                    </a>
                                    <a href="#"
                                     class="btn btn-icon btn-circle ml-2">
                                        <span class="fas fa-edit action my-fa-edit"></span>
                                    </a>

                                    <a href="#" class="btn btn-icon btn-circle deleterole ml-2">
                                        <span class="fas fa-trash-alt action my-fa-remove"></span>
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                  <td>Other browsers</td>
                                  <td>All others</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>U</td>
                                  <td class="text-center">
                                    <a href="#" class="btn btn-icon btn-circle">
                                        <span class="fas fa-eye action my-fa-eye"></span>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-circle ml-2">
                                        <span class="fas fa-edit action my-fa-edit"></span>
                                    </a>

                                    <a href="#" class="btn btn-icon btn-circle deleterole ml-2">
                                        <span class="fas fa-trash-alt action my-fa-remove"></span>
                                    </a>
                                 </td>
                                </tr>
                                </tbody>
                       </table>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                        <form action="{{ route('user.add') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="#">Nom de l'entreprise</label>
                                        <input type="text" class="form-control" name="nom">
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Telephone</label>
                                        <input type="text" class="form-control" name="telephone">
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Adresse</label>
                                        <input type="text" class="form-control" name="adresse">
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Charger le code nif</label>
                                        <input type="file" class="form-control" name="code_nif" accept=".pdf">
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="#">Representant</label>
                                        <input type="text" class="form-control" name="representant">
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Logo</label>
                                        <input type="file" class="form-control" name="logo" accept=".png, .jpeg">
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Limit de credit</label>
                                        <input type="number" class="form-control" name="max_credit">
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Charger le RCCM</label>
                                        <input type="file" class="form-control" name="rccm" accept=".pdf">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2">Etat</label><br>
                                        <div class="form-check col-md-3">
                                          <input class="form-check-input" type="radio" name="status" value="disabled" checked >
                                          <label class="form-check-label">Non actif</label>
                                        </div>
                                        <div class="form-check col-md-3">
                                          <input class="form-check-input" type="radio" name="status" value="enabled">
                                          <label class="form-check-label">Actif</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-dark">Enregistrer</button>
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

