{{ Form::hidden('template_id', $template->id) }}

<div class="form-group">
    {{ Form::label('field-type', 'Type') }} <i class="text-danger">*</i>
    {{ Form::select('field-type', $helper->getCustomFieldsList(), null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('field-name', 'Name') }} <i class="text-danger">*</i>
    {{ Form::text('field-name', null, ['class' => 'form-control', 'placeholder' => 'Enter the field name', 'novalidate']) }}
</div>

<div class="form-group">
    {{ Form::label('field-prefix', 'Prefix') }}
    {{ Form::text('field-prefix', null, ['class' => 'form-control', 'placeholder' => 'Enter the prefix', 'novalidate']) }}
</div>
