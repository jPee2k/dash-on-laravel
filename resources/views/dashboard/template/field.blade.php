{{ Form::hidden('template_id', $template->id) }}

<div class="form-group">
    {{ Form::label('type', 'Type') }} <i class="text-danger">*</i>
    {{ Form::select('type', $helper->getCustomFieldsList(), null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('name', 'Name') }} <i class="text-danger">*</i>
    {{ Form::text('name', null, ['class' => 'form-control', 'aria-describedby' => 'name-error', 'placeholder' => 'Enter the field name', 'novalidate']) }}
    @if ($errors->has('name'))
        <small id="name-error" class="form-text text-danger">
            {{ $errors->first('name') }}
        </small>
    @endif
</div>

<div class="form-group">
    {{ Form::label('prefix', 'Prefix') }}
    {{ Form::text('prefix', null, ['class' => 'form-control', 'aria-describedby' => 'prefix-error', 'placeholder' => 'Enter the prefix', 'novalidate']) }}
    @if ($errors->has('prefix'))
        <small id="prefix-error" class="form-text text-danger">
            {{ $errors->first('prefix') }}
        </small>
    @endif
</div>
