@extends('layouts.dash')

@section('title', 'Edit Template')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Edit Template</h5>
        </div>

        <div class="card-body">
            {{ Form::model($template, ['method' => 'PATCH', 'url' => route('templates.update', $template), 'id' => 'template-edit', 'role' => 'form', 'autocomplete' => 'off']) }}
            @include('dashboard.template.form')
            {{ Form::close() }}

            {{--Insert all fields for this template--}}
            <div id="fields" data-url="{{ route('templates.fields', $template->id) }}"></div>

            <div id="field-form"
                 class="col-md-9 col-lg-6 border border-primary rounded m-2 mb-4 px-4 pt-3">
                <p class="h5 mb-4 text-center">New Field</p>

                {{ Form::open(['method' => 'POST', 'url' => route('fields.store'), 'data-url' => route('fields.store'), 'files' => true, 'id' => 'field-edit', 'role' => 'form', 'autocomplete' => 'off']) }}
                @include('dashboard.template.form-fields')
                <div class="col text-right">
                    <button type="submit" class="btn btn-sm btn-outline-primary form-sbt mb-4 px-4">
                        Save Field
                    </button>
                </div>
                {{ Form::close() }}
            </div>

            <div class="card-footer bg-white text-right">
                <button id="add-form-field" class="btn btn-primary mr-2 float-left">Add field</button>
                <button type="submit" form="template-edit" class="btn btn-primary mr-2">{{ $submitName }}</button>
                <button type="reset" form="template-edit" class="btn btn-outline-primary">Cancel</button>
            </div>
        </div>
    </div>
@endsection
