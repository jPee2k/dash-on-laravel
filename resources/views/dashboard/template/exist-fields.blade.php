<div
    class="field-area field-area-{{ $field->id }} col-10 col-md-9 col-lg-6 border border-primary rounded py-1 px-3 mb-2 ml-5">
    <div class="row">
        <div class="col-6"><i class="field-title">{{ "{$field->type} - {$field->name}" }}</i></div>
        <div class="roll-up-buttons col-6 text-right">
            <div class="minus hidden" onclick="touchFieldBlock({{ $field->id }});">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-minus">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
            </div>
            <div class="plus" onclick="touchFieldBlock({{ $field->id }});">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-plus">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
            </div>
        </div>
    </div>

    <div class="hidden field-{{ $field->id }}">
        <p class="h5 mb-4 text-center">Edit Field</p>

        {{ Form::open(['method' => 'PATCH', 'data-url' => route('fields.update', $field->id), 'onsubmit' => "updateField(event, {$field->id} )", 'id' => "field-update-{$field->id}", 'role' => 'form', 'autocomplete' => 'off']) }}
        {{ Form::hidden('template_id', $field->template->id) }}
        <div class="form-group">
            {{ Form::label("type-{$field->id}", 'Type') }} <i class="text-danger">*</i>
            {{ Form::select("type-{$field->id}", $helper->getCustomFieldsList(), $field->type, ['name' => 'type', 'class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label("name-{$field->id}", 'Name') }} <i class="text-danger">*</i>
            {{ Form::text("name-{$field->id}", $field->name, ['name' => 'name', 'class' => 'form-control', 'placeholder' => 'Enter the field name', 'novalidate']) }}
        </div>
        <div class="form-group">
            {{ Form::label("prefix-{$field->id}", 'Prefix') }}
            {{ Form::text("prefix-{$field->id}", $field->prefix, ['name' => 'prefix', 'class' => 'form-control', 'placeholder' => 'Enter the field name', 'novalidate']) }}
        </div>
        <div class="col text-right">
            <button class="btn btn-sm btn-outline-primary mb-4 px-4">
                Update Field
            </button>
            <button class="btn btn-sm btn-danger mr-1 mb-4" form="{{ 'field-delete-' . $field->id }}"
               onclick="removeField(event ,{{ $field->id }})">
                Delete
            </button>
        </div>
        {{ Form::close() }}

        {{ Form::open(['method' => 'DELETE', 'data-url' => route('fields.destroy', $field), 'id' => "field-delete-{$field->id}"]) }}{{ Form::close() }}
    </div>
</div>

