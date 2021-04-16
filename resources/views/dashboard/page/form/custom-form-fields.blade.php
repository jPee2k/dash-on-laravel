<div class="form-group">
    {{ Form::label('templates', 'Select template for current page') }}
    {{ Form::select('templates', $templates, $page->template_id, ['name' => 'template_id', 'class' => 'form-control', 'aria-describedby' => 'template-error']) }}
    @if ($errors->has('template'))
        <small id="template-error" class="form-text text-danger">
            {{ $errors->first('template') }}
        </small>
    @endif
</div>
