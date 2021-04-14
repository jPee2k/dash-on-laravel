<div class="col-md-9 col-lg-6 border border-primary rounded m-2 mb-4 ml-5 px-4 pt-3 bg-light">
    <p class="h5 mb-4 text-center">Edit Field</p>

    {{ Form::open(['method' => 'POST', /*'url' => route('fields.update'), 'data-url' => route('fields.update'),*/ 'id' => "field-update-{$field->id}", 'role' => 'form', 'autocomplete' => 'off']) }}
    @if ($field->type === 'text')
        <div class="form-group">
            {{ Form::label("type-{$field->type}-{$field->id}", 'Type') }} <i class="text-danger">*</i>
            {{ Form::select("type-{$field->type}-{$field->id}", $helper->getCustomFieldsList(), $field->type, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label("name-{$field->name}-{$field->id}", 'Name') }} <i class="text-danger">*</i>
            {{ Form::text("name-{$field->name}-{$field->id}", $field->name, ['class' => 'form-control', 'placeholder' => 'Enter the field name', 'novalidate']) }}
        </div>

        <div class="form-group">
            {{ Form::label("prefix-{$field->prefix}-{$field->id}", 'Prefix') }}
            {{ Form::text("prefix-{$field->prefix}-{$field->id}", $field->prefix, ['class' => 'form-control', 'placeholder' => 'Enter the field name', 'novalidate']) }}
        </div>
    @elseif ($field->type === 'textarea')

    @elseif ($field->type === 'image')

    @endif

    <div class="col text-right">
        <button type="submit" class="btn btn-sm btn-outline-primary form-sbt mb-4 px-4">
            Update Field
        </button>
    </div>
    {{ Form::close() }}
</div>

