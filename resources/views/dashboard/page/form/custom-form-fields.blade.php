<div class="form-group col-11 col-md-10">
    {{ Form::label('templates', 'Select template for current page') }}
    <div class="row">
        <div class="col-10">
            {{ Form::select('templates', $templates, $page->template_id, ['name' => 'template_id', 'class' => 'form-control', 'aria-describedby' => 'template-error']) }}
        </div>
        <div class="col-2 pl-0">
            <a href="{{ route('templates.edit', $page->template_id) }}" data-href="{{ route('templates.index') }}" id="edit-template-link" class="btn btn-primary mr-2 text-nowrap">Edit Template</a>
        </div>
    </div>

    @if ($errors->has('template'))
        <small id="template-error" class="form-text text-danger">
            {{ $errors->first('template') }}
        </small>
    @endif
</div>
