<div class="form-group">
    {{ Form::label('content_title', 'Title') }}
    {{ Form::text('content_title', $page->content_title, ['class' => 'form-control', 'aria-describedby' => 'content-title-error', 'placeholder' => 'Enter the title', 'novalidate']) }}
    @if ($errors->has('content_title'))
        <small id="content-title-error" class="form-text text-danger">
            {{ $errors->first('content_title') }}
        </small>
    @endif
</div>

<textarea id="summernote" name="content_data"
@if ($errors->has('content_data'))
    {{ 'class="is-invalid"' }}
@endif>
    {{ $page->content_data }}
</textarea>
