<div class="form-group">
    {{ Form::label('content_title', 'Title') }}
    {{ Form::text('content_title', $page->content_title, ['class' => 'form-control', 'aria-describedby' => 'content-title-error', 'placeholder' => 'Enter the title', 'novalidate']) }}
    @if ($errors->has('content_title'))
        <small id="content-title-error" class="form-text text-danger">
            {{ $errors->first('content_title') }}
        </small>
    @endif
</div>

<div class="form-group">
    @if ($errors->has('content_data'))
        {{ Form::textarea('content_data', $page->content_data, ['class' => 'form-control is-invalid', 'id' => 'summernote', 'aria-describedby' => 'content-data-error', 'placeholder' => 'Enter the content', 'novalidate']) }}
    @else
        {{ Form::textarea('content_data', $page->content_data, ['class' => 'form-control', 'id' => 'summernote', 'aria-describedby' => 'content-data-error', 'placeholder' => 'Enter the content', 'novalidate']) }}
    @endif
</div>

