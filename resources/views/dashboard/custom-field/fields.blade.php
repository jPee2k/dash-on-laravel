{{-- $field --}}
{{--$field->customField--}}

<div class="col-11 col-lg-12 custom-field-area border border-primary rounded py-1 px-3 mt-2 ml-5">
    @switch($field->type)
        @case('text')
        <div class="form-group my-2">
            {{ Form::label($field->prefix, $field->name) }}
            {{ Form::text($field->prefix, null /* $field->customField->value */, ['class' => 'form-control', 'placeholder' => 'Enter the text', 'novalidate']) }}
        </div>
        @break

        @case('textarea')
        <div class="form-group my-2">
            {{ Form::label($field->prefix, $field->name) }}
            {{ Form::textarea($field->prefix, null, ['class' => 'form-control', 'aria-describedby' => 'keywords-error', 'placeholder' => 'Enter the text', 'novalidate']) }}
        </div>
        @break

        @case('image')
        <div class="custom-file form-group my-2">
            {{ Form::label($field->prefix, $field->name, ['class' => 'custom-file-label']) }}
            {{ Form::file($field->prefix, ['class' => 'custom-file-input form-control', 'id' => 'image']) }}
        </div>
        @break

        @default
        <div class="form-group my-2">
            Undefined field type
        </div>
    @endswitch
</div>
