@extends('layouts.tpl')

@section('content')


<div class="container" style="margin-top:10px">
    <div class="card">
        <div class="card-header">
            <h3>
                Ajout d'un type de contrat
                <span>
                    <!-- verification de la valider des informations -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- fin de la verification des informations -->
            </h3>
        </div>
    <form action="{{ Route('updateTypeContrat',['id'=>$typeContrat->id]) }}" method="post">
        @csrf
        <div class="card-body">
            <label class='form-label' for='nom'>Nom:</label>
            <input type="text" name="nom" id='nom' value="{{ $typeContrat->nom }}" class="form-control">
        </div>
        <div class="card-footer">
            <button type="submit" class='btn btn-primary'>
                <i class="fas fa-edit "></i>
                Modifier
            </button>
        </div>
    </form>
    </div>
</div>


@endsection
