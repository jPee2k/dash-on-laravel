<div class="form-group">
    {{ Form::label('title', 'Title') }} <i class="text-danger">*</i>
    {{ Form::text('title', $meta->title, ['class' => 'form-control', 'aria-describedby' => 'title-error', 'placeholder' => 'Enter the Title', 'novalidate']) }}
    @if ($errors->has('title'))
        <small id="title-error" class="form-text text-danger">
            {{ $errors->first('title') }}
        </small>
    @endif
</div>

<div class="form-group">
    {{ Form::label('url', 'og: URL') }} <i class="text-danger">*</i>
    {{ Form::text('url', $meta->url, ['class' => 'form-control', 'aria-describedby' => 'url-error', 'placeholder' => 'Enter the URL', 'novalidate']) }}
    @if ($errors->has('url'))
        <small id="url-error" class="form-text text-danger">
            {{ $errors->first('url') }}
        </small>
    @endif
</div>

<div class="form-group">
    {{ Form::label('description', 'og: Description') }}
    {{ Form::textarea('description', $meta->description, ['class' => 'form-control', 'aria-describedby' => 'description-error', 'placeholder' => 'Enter the Description', 'novalidate']) }}
    @if ($errors->has('description'))
        <small id="description-error" class="form-text text-danger">
            {{ $errors->first('description') }}
        </small>
    @endif
</div>

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
    {{ Form::textarea('keywords', $meta->keywords, ['class' => 'form-control', 'aria-describedby' => 'keywords-error', 'placeholder' => 'Enter keywords separated by commas', 'novalidate']) }}
    @if ($errors->has('keywords'))
        <small id="keywords-error" class="form-text text-danger">
            {{ $errors->first('keywords') }}
        </small>
    @endif
</div>
