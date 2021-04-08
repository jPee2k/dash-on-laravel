<div class="form-group">
    {{ Form::label('slug', 'URI (slug)') }}
    {{ Form::text('slug', $slug ?? '', ['class' => 'form-control', 'aria-describedby' => 'slug-error', 'placeholder' => 'Enter the URL', 'novalidate']) }}
    @if ($errors->has('slug'))
        <small id="slug-error" class="form-text text-danger">
            {{ $errors->first('slug') }}
        </small>
    @endif
</div>

<div class="form-group">
    {{ Form::label('description', 'og: Description') }}
    {{ Form::textarea('description', $page->description, ['class' => 'form-control', 'aria-describedby' => 'description-error', 'placeholder' => 'Enter the Description', 'novalidate']) }}
    @if ($errors->has('description'))
        <small id="description-error" class="form-text text-danger">
            {{ $errors->first('description') }}
        </small>
    @endif
</div>

@isset($page->image_name)
    <div class="border rounded mb-4">
        <img class="img-fluid" src="{{ $page->getImage() }}" alt="og:image">
    </div>
@endisset
<div class="custom-file form-group">
    <label class="custom-file-label" for="image">og: Image</label>
    {{ Form::file('image', ['class' => 'custom-file-input form-control']) }}
    @if ($errors->has('image'))
        <small id="image-error" class="form-text text-danger">
            {{ $errors->first('image') }}
        </small>
    @endif
</div>

<div class="form-group">
    {{ Form::label('keywords', 'Keywords') }}
    {{ Form::textarea('keywords', $page->keywords, ['class' => 'form-control', 'aria-describedby' => 'keywords-error', 'placeholder' => 'Enter keywords separated by commas', 'novalidate']) }}
    @if ($errors->has('keywords'))
        <small id="keywords-error" class="form-text text-danger">
            {{ $errors->first('keywords') }}
        </small>
    @endif
</div>
