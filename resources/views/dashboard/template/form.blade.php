<div class="form-group col-md-9 col-lg-6">
    {{ Form::label('name', 'Name') }} <i class="text-danger">*</i>
    {{ Form::text('name', $template->name, ['class' => 'form-control', 'aria-describedby' => 'name-error', 'placeholder' => 'Enter the name', 'novalidate', /* 'oninput' => 'makePrefix(this)' */]) }}
    @if ($errors->has('name'))
        <small id="name-error" class="form-text text-danger">
            {{ $errors->first('name') }}
        </small>
    @endif
</div>

<div class="form-group col-md-9 col-lg-6">
    {{ Form::label('prefix', 'Prefix') }}
    {{ Form::text('prefix', $template->prefix, ['class' => 'form-control', 'aria-describedby' => 'prefix-error', 'placeholder' => 'Enter the prefix', 'novalidate', /* 'oninput' => 'makePrefix(this)' */]) }}
    @if ($errors->has('prefix'))
        <small id="prefix-error" class="form-text text-danger">
            {{ $errors->first('prefix') }}
        </small>
    @endif
</div>
