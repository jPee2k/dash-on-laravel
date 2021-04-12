@extends('layouts.dash')

@section('title', 'Edit Template')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Edit Template</h5>
        </div>
        {{ Form::model($template, ['method' => 'PATCH', 'url' => route('templates.update', $template), 'role' => 'form', 'autocomplete' => 'off']) }}
        <div class="card-body">
            @include('dashboard.template.form')
        </div>
        <div class="card-footer bg-white text-right">
            <button type="submit" class="btn btn-primary mr-2">{{ $submitName }}</button>
            <button type="reset" class="btn btn-light">Cancel</button>
        </div>
        {{ Form::close() }}
    </div>
@endsection
