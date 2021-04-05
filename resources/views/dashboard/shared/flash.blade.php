@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <b>{{ $errors->first() }}</b>
    </div>
@else
    @include('flash::message')
@endif
