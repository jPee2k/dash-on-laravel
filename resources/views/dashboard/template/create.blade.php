@extends('layouts.dash')

@section('title', 'Create New Template')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Create Template</h5>
        </div>

        <div class="card-body">
            {{ Form::model($template, ['method' => 'POST', 'url' => route('templates.store', $template), 'id' => 'template-edit', 'role' => 'form', 'autocomplete' => 'off']) }}
            @include('dashboard.template.form')
            {{ Form::close() }}

            <div class="card-footer bg-white text-right">
                <button type="submit" form="template-edit" class="btn btn-primary mr-2">{{ $submitName }}</button>
                <button type="reset" form="template-edit" class="btn btn-light">Cancel</button>
            </div>
        </div>
@endsection
