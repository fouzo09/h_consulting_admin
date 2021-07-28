@if (\Session::has('succes'))
    <div class="row">
        <div class="offset-md-1 col-md-10 alert alert-success text-center">
            <strong>{{ \Session::get('succes') }}</strong>
        </div>
    </div>
@endif

@if (\Session::has('error'))
    <div class="row">
        <div class="offset-md-1 col-md-10 alert alert-danger text-center">
            <strong>{{ \Session::get('error') }}</strong>
        </div>
    </div>
@endif
