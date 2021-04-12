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
    <div class="show-image border rounded mb-4">
        <img class="img-fluid" src="{{ $imageUploader->getWebpImage($page->image_name) }}" alt="og:image">
        <a href="{{ route('pages.removeImage', $page->id) }}" class="close-button close" aria-label="Close"
           data-confirm="Вы уверены?" data-method="delete" rel="nofollow">
            <span aria-hidden="true">&times;</span>
        </a>
    </div>
@endisset
<div class="custom-file form-group">
    {{ Form::label('image', 'og: Image', ['class' => 'custom-file-label']) }}
    {{ Form::file('image', ['class' => 'custom-file-input form-control', 'id' => 'image']) }}
    @if ($errors->has('image'))
        <small id="image-error" class="form-text text-danger">
            {{ $errors->first('image') }}
        </small>
    @endif
</div>

<div class="form-group">
    {{ Form::label('keywords', 'Keywords') }}
    {{ Form::textarea('keywords', $page->keywords, ['class' => 'form-control', 'aria-describedby' => 'keywords-error', 'placeholder' => 'Enter keywords separated by commas or spaces', 'novalidate']) }}
    @if ($errors->has('keywords'))
        <small id="keywords-error" class="form-text text-danger">
            {{ $errors->first('keywords') }}
        </small>
    @endif
</div>
