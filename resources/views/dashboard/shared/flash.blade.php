@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        <b>{{ Session::get('success') }}<b>
    </div>
@elseif (Session::has('warning'))
    <div class="alert alert-warning" role="alert">
        <b>{{ Session::get('warning') }}<b>
    </div>
@elseif ($errors->any())
    <div class="alert alert-danger" role="alert">
        <b>{{ $errors->first() }}</b>
    </div>
@endif
