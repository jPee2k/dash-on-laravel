<div class="form-group">
    {{ Form::label('name', 'Name') }} <i class="text-danger">*</i>
    {{ Form::text('name', $page->name, ['class' => 'form-control', 'aria-describedby' => 'name-error', 'placeholder' => 'Enter the name', 'novalidate', 'oninput' => 'makeSlug(this)']) }}
    @if ($errors->has('name'))
        <small id="name-error" class="form-text text-danger">
            {{ $errors->first('name') }}
        </small>
    @endif
</div>

<div class="form-group">
    {{ Form::label('status', 'Select Status') }} <i class="text-danger">*</i>
    {{ Form::select('status', $helper->getStatuses(), null, ['class' => 'form-control', 'id' => 'status', 'aria-describedby' => 'status-error']) }}
    @if ($errors->has('status'))
        <small id="status-error" class="form-text text-danger">
            {{ $errors->first('status') }}
        </small>
    @endif
</div>
