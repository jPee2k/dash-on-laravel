{{ Form::open(['url' => route('pages.index'), 'method' => 'GET', 'autocomplete' => 'off']) }}

<div class="form-group float-left shadow-none mb-2 mr-2 p-0">
    <select class="form-control form-control-sm" name="limit" onchange='this.form.submit();'>
        @foreach($limits as $currLimit)
            @if ($currLimit === $limit)
                <option selected>{{ $currLimit }}</option>
            @else
                <option>{{ $currLimit }}</option>
            @endif
        @endforeach
    </select>
</div>

<div class="input-group mb-2 float-left col-lg-4 col-md-5 col-6 px-0">
    {{ Form::text('s', old('s'), ['class' => 'form-control form-control-sm', 'placeholder' => 'Enter the search query', 'novalidate']) }}
    <button type="submit" class="btn btn-primary py-0 shadow-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
             viewBox="0 0 16 16">
            <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
    </button>
</div>
{{ Form::close() }}

